<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_template extends CI_Controller {

    /**
      These is sample Template for Backend Operation
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        // $this->load_panel_data();
    }

    public function select_enquiry(){
        $user=$this->session->userdata('user');

        $query = $this->db->get_where('tblenquiry', array('status'=>'0')); //For selection Data
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/enquiry/enquiry',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }


    public function insert_data(){
        $email=htmlentities($_POST['email']); //Taking attribute using post
        $data = array(
            'email'=>$email,//Attribute list ( , ) separated
            'att2'=>$email   // last doesnot contain comma
        );
        if($this->mod->register_success($data)==true){

           //True Block
        }else{
            //false block
        }

    }

    public function update_row(){
         //Update the test array
        $test = array(
            'flag' =>11
        );
        $where = "pid=" . $_POST['pid'];  //where clause
        $str = $this->db->update_string('tblproduct', $test, $where); //fire update qry
        $this->db->query($str);
    }
}

?>