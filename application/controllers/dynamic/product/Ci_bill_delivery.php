<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_bill_delivery extends CI_Controller {

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

     public function getBill(){
         $this->load->view('dynamic/dashboard/customer/header');
         $this->load->view('dynamic/product/bill');
         $this->load->view('dynamic/dashboard/customer/footer');
     }


    public function getOrderStatus(){
        $query = $this->db->query('select * from tbldilivery as d,tbllogin as t where d.bid=t.id');
        //      echo $_POST['pid'];
        $data['data'] = $query->result();

        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/order/view_order',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }

}

?>