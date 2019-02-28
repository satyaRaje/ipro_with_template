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

    public function view_cart(){
        $query = $this->db->get_where('tblcart', array('user_id' =>3,'flag'=>'0'));
        $data['data'] = $query->result();

        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/cart/cart',$data);
        $this->load->view('dynamic/dashboard/customer/footer');

    }

    public function add_quantity_cart(){
        if(isset($_POST['plus'])){
            $data = array('qty'=>$_POST['qty']+1);
            $where ="id=".$_POST['pid'];
            $this->db->update('tblcart', $data, $where);
        }else if(isset($_POST['minus'])){
            $data = array('qty'=>$_POST['qty']-1);
            $where ="id=".$_POST['pid'];
            $this->db->update('tblcart', $data, $where);
        }else{
            $this->db->where('id', $_POST['pid']);
            $this->db->delete('tblcart');
        }
       $this->view_cart();
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
        }else{
            $result['status']=false;
            $result['otp_message']="Unable to Add Product to Cart";
            //echo json_encode($result);
        }

    }
}

?>