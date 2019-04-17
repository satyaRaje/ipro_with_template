<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci_Purchase extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        //$this->load->library('session');
        //$this->ci =& get_instance();
    }



public function generate_bill()
{


    $arr = array(
        'billing_add' => $_POST['bill_address'],
        'tot' => $_POST['tot_amount'],
        'user_id' => $this->session->user_id
    );

    //echo $t;
    $t=$_POST['tot_count'];
    if ($this->db->insert('tbldilivery', $arr)) {

        //$this->load->view('student/header');
        $query = $this->db->query('select * from tbldilivery where user_id=' . $this->session->user_id . " order by date_stamp desc limit 1");
        $row = $query->result();
       // echo $row[0]->bid;

        $base = array();
        $child = array();
        //var_dump();
        //$child.array_push()


      for ($i = 0; $i <= $t; $i++) {
            @$child['pname'] = $_POST[$i . "pname"];
            @$child['cost'] = $_POST[$i . "price"];
            @$child['bid'] = $row[0]->bid;
            @$child['user_id'] = $this->session->user_id;
          @$child['qty'] =$_POST[$i . "qty"];
            @$base[$i] = $child;
        }
        if ($this->db->insert_batch('tbltransaction', $base)) {
               echo "done";
        }
    }


}





    public function view_cart(){
        $query = $this->db->get_where('tblcart', array('user_id' =>3,'flag'=>'0'));
        $data['data'] = $query->result();

        $query1 = $this->db->get_where('tbllogin',array('email'=>$this->session->email));
        $data['data2'] = $query1->result();

        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/cart/cart',$data);
        $this->load->view('dynamic/dashboard/customer/footer');

    }

    public function add_quantity_cart(){


        if(isset($_POST['plus'])){
            $data = array('qty'=>$_POST['qty']+1);
            $where ="pid=".$_POST['pid'];
            $this->db->update('tblcart', $data, $where);
        }else if(isset($_POST['minus'])){
            $data = array('qty'=>$_POST['qty']-1);
            $where ="pid=".$_POST['pid'];
            $this->db->update('tblcart', $data, $where);
        }else{
            $this->db->where('pid', $_POST['pid']);
            $this->db->delete('tblcart');
        }
       $this->view_cart();


    }

    public function product_description1(){
        $user=$this->session->userdata('user');
        $this->db->where('pid',$_GET['pid']);
        $query = $this->db->get_where('tblproduct', array());
        $data['data'] = $query->result();
        $this->load->view('base_web/header');
        $this->load->view('dynamic/marketplace/product_description',$data);
        $this->load->view('base_web/footer');

    }


    public function product_shop_description1(){
        $user=$this->session->userdata('user');
        $this->db->where('pid',$_GET['pid']);
        $query = $this->db->get_where('tblshop', array());
        $data['data'] = $query->result();
        $this->load->view('base_web/header');
        $this->load->view('dynamic/marketplace/product_shop_description',$data);
        $this->load->view('base_web/footer');

    }

    public function add_to_cart(){
        //header('Access-Control-Allow-Origin: *');
        $pid=htmlentities($_POST['pid']);
        $pname=htmlentities($_POST['pname']);
        $qty=htmlentities('1');
        $price = htmlentities($_POST['price']);
        //$price = htmlentities($_POST['dis']);
        $img = htmlentities($_POST['img']);
        $user_id = htmlentities("3");

    if($this->session->login=='1'){

        $data = array(
            'pid'=>$pid,
            'pname'=>$pname,
               'qty'=>$qty,
            'price'=>$price,
            'img'=>$img,
            'user_id'=>$user_id
        );

        $result=array();
        if($this->db->replace('tblcart',$data)==true){
            $result['status']=true;
            //echo json_encode($result);
            $this->view_cart();
        }else{
            $result['status']=false;
            $result['otp_message']="Unable to Add Product to Cart";
            echo json_encode($result);
        }
    }else{
        $this->load->view('base_web/header');
        $this->load->view('dynamic/login/user_login');
        $this->load->view('base_web/footer');

    }
    }
}

?>