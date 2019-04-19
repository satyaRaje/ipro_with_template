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
        $this->load->view('base_web/panel2.php');
        $this->load->view('base_web/footer.php');

    }
    public function About_us(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/aboutus.php');
        $this->load->view('base_web/footer.php');
    }

    
    public function Printing(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/printing.php');
        $this->load->view('base_web/footer.php');
    }

    public function Scanning(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/scanning.php');
        $this->load->view('base_web/footer.php');
    }


public function Rapid(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/rapid.php');
        $this->load->view('base_web/footer.php');
    }

public function Cad(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/cad.php');
        $this->load->view('base_web/footer.php');
    }

    public function Design(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/design.php');
        $this->load->view('base_web/footer.php');
    }

    public function Reverse(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/reverse.php');
        $this->load->view('base_web/footer.php');
    }

public function Topology(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/topology.php');
        $this->load->view('base_web/footer.php');
    }

    public function Small(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/small.php');
        $this->load->view('base_web/footer.php');
    }

    public function Vaccum(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/vaccum.php');
        $this->load->view('base_web/footer.php');
    }
    public function Xray(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/xray.php');
        $this->load->view('base_web/footer.php');
    }


    public function Functional(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/functional.php');
        $this->load->view('base_web/footer.php');
    }

    public function Tooling(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/tooling.php');
        $this->load->view('base_web/footer.php');
    }



public function Injection(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/injection.php');
        $this->load->view('base_web/footer.php');
    }
public function Cnc(){
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/cnc.php');
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
    public function careers_form()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/careers_form.php');
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
    public function faq()
    {
        $this->load->view('base_web/header.php');
        $this->load->view('base_web/faqs.php');
        $this->load->view('base_web/footer.php');
    }
    public function mutation_form()
    {
       $this->load->view('base_web/header.php');
        $this->load->view('base_web/mutation_form.php');
        $this->load->view('base_web/footer.php');  
    }

    public function Marketplace()
    {
        $d=array('flag' => '18');
        $query = $this->db->get_where('tblproduct',$d);
        $data['data'] = $query->result();
        $this->load->view('base_web/header.php');
        $this->load->view('dynamic/marketplace/market',$data);
        $this->load->view('base_web/footer.php');
    }

    public function Shop()
    {
        $d=array('flag' => '18');
        $query = $this->db->get_where('tblshop',$d);
        $data['data'] = $query->result();
        $this->load->view('base_web/header.php');
        $this->load->view('dynamic/marketplace/shop',$data);
        $this->load->view('base_web/footer.php');
    }

    public function logout(){
        $this->load->view('base_web/header.php');
     $this->load->view('base_web/panel2');
     $this->load->view('base_web/footer.php');

 }
 /*function savingdataof_contact()  
    {  
        //this array is used to get fetch data from the view page.  
        $data = array(  
                        'name'     => $this->input->post('fname'),  
                        'mobile_no'  => $this->input->post('mobileno'),  
                        'email'   => $this->input->post('email'),  
                        'info' => $this->input->post('info')  
                        'aboutus' => $this->input->post('aboutus')  
                        'message' => $this->input->post('message')  
                        );  
        //insert data into database table.  
        $this->db->insert('tblcontactus',$data);  
  
        redirect("<?php echo base_url();?>index.php/welcome/Contact_us");  
    }*/
     
}
