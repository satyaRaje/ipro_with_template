<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

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
       // $this->load_panel_data();
    }

     public function select_enquiry(){
        //$user=$this->session->userdata('user');
        $query = $this->db->get_where('tblenquiry', array('status'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/product/view_enquiry',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
     }


     public function add_contact(){
        $data= array('name'=>$_POST['fname'], 'mobile_no'=>$_POST['mobileno'], 'email'=>$_POST['email'], 'info'=>$_POST['info'], 'known_us'=>$_POST['aboutus'], 'message'=>$_POST['message'], 'flag'=>0);
         $this->db->insert('tblcontactus',$data);
         $this->load->view('base_web/header.php');
         $this->load->view('base_web/thankyou.php');
         $this->load->view('base_web/footer.php');

     }


    public function select_contact(){
        //$user=$this->session->userdata('user');
        $query = $this->db->get_where('tblcontactus', array('flag'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/enquiry/contact_view',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }

    public function insert_mutation_form()
    {
        $data = array('email'=>$_POST['email'], 'name'=>$_POST['name'], 'mobile_no'=>$_POST['mobile_no'], 'whatsapp_no'=>$_POST['whatsapp_no'], 'dob'=>$_POST['dob'], 'college_id'=>$_POST['college_id'],'year_of_admission'=>$_POST['year_of_admission'],'year_of_study'=>$_POST['year_of_study'],'degree'=>$_POST['degree'],'college'=>$_POST['college'],'department'=>$_POST['department'],'interests'=>$_POST['interests'],'future_goals'=>$_POST['future_goals'],'comments' =>$_POST['comments']);
         $this->db->insert('tblmutation',$data);
         $this->load->view('base_web/header.php');
         $this->load->view('base_web/thankyou.php');
         $this->load->view('base_web/footer.php');
        
    }
    public function insert_careers_form()
    {
        $data = array('email'=>$_POST['email'], 'name'=>$_POST['name'],'father_name'=>$_POST['father_name'], 'mobile_no'=>$_POST['mobile_no'], 'position'=>$_POST['position'], 'education'=>$_POST['education'],'college'=>$_POST['college'],'degree'=>$_POST['degree'],'year_of_passing'=>$_POST['year_of_passing'],'work'=>$_POST['work']);
        $this->db->insert('tblcareers',$data);
         $this->load->view('base_web/header.php');
         $this->load->view('base_web/thankyou.php');
         $this->load->view('base_web/footer.php');
        
    }

}

?>