<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
    }


    public function index()
    {
    	$this->load->view('base_web/header.php');
        $this->load->view('base_web/panel.php');
        $this->load->view('base_web/footer.php');

    }
    public function About_us(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/aboutus.php');
        $this->load->view('base_web/footer.php');
    }

    public function Services(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/services.php');
        $this->load->view('base_web/footer.php');
    }

    public function Home_page(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/panel.php');
        $this->load->view('base_web/footer.php');
    }
    public function Contact_us(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/contact_us.php');
        $this->load->view('base_web/footer.php');
    }
    public function Enquiry()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/enquiry.php');
        $this->load->view('base_web/footer.php');
    }
    public function Mutation()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/mutation.php');
        $this->load->view('base_web/footer.php');
    }
     public function Login()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/login.php');
        $this->load->view('base_web/footer.php');
    }
    public function register()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/register.php');
        $this->load->view('base_web/footer.php');
    }


    public function view_blog()
    {
        $query = $this->db->get_where('tblblog',array('flag'=>1)); //For selection Data
        $data['data'] = $query->result();

        $this->load->view('base_web/header');
        $this->load->view('base_web/view_blog',$data);
        $this->load->view('base_web/footer');
    }

    
}
