<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_blog extends CI_Controller {

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

    public function load_admin_blog(){
        $query = $this->db->get_where('tblblog', array('flag'=>'0')); //For selection Data
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/product/add_blog',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
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
        $tname=htmlentities($_POST['tname']); //Taking attribute using post
        $writer =htmlentities($_POST['writer_name']); //Taking attribute using post
        $message=htmlentities($_POST['message']); //Taking attribute using post

        $data = array(
            'title'=>$tname,//Attribute list ( , ) separated
            'fname'=>$writer,
            'blog_cont'=>$message,
            'cust_id'=>3// last doesnot contain comma
        );
        if($this->db->insert('tblblog',$data)==true){
            $this->load_admin_blog();

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