<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_message extends CI_Controller {

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
        $this->load_panel_data();
    }

    public function load_message_customer(){
       $this->load->view('dynamic/dashboard/admin/header');
        $query = $this->db->get_where('tbl_admin_message', array('flag'=>'0'));
        $data['data'] = $query->result();

        $query = $this->db->get_where('tbl_message', array('flag'=>'0'));
        $data['data1'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/message',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }

    public function load_message_admin(){

    }



}

?>