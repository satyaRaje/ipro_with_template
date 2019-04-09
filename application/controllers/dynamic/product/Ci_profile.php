<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_profile extends CI_Controller {

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

    public function index()
    {
    }

     public function update_profile(){
        $data=array(
            'fname'=>$_POST['fname'],
            "address1"=>$_POST['add1'],
            "address2"=>$_POST['add2'],
            "address3"=>$_POST['add3'],
            "city"=>$_POST['city'],
            "state"=>$_POST['state'],
            "country"=>$_POST['country'],
        );

         $where = "id=".$this->session->user_id;

         $str=$this->db->update_string('tbllogin',$data,$where);
         $this->db->query($str);

         $this->load->view('dynamic/dashboard/customer/header');
         $d=array('id'=>$this->session->user_id);
         $query = $this->db->get_where('tbllogin',$d);
         $data['data'] = $query->result();
         $this->load->view('dynamic/product/user_profile',$data);
         $this->load->view('dynamic/dashboard/customer/footer');

     }


}

?>