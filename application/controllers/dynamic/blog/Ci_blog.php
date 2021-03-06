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
        $query = $this->db->get_where('tblblog'); //For selection Data
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

        $config['upload_path']   = getcwd().'/uploads/blog/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
      @  $this->load->library('upload', $config);

        $img1="";
        $img2="";
        $img3="";
        if (! @$this->upload->do_upload('img1')) {
            @$error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }
        else {
            @$img1=$this->upload->data('file_name');
        }

            if (! @$this->upload->do_upload('img2')) {
                @$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_passage', $error);
                print_r($error);
            }
            else {
                @$img2=$this->upload->data('file_name');
            }

            if (!@ $this->upload->do_upload('img3')) {
                @$error = array('error' => $this->upload->display_errors());
                //$this->load->view('upload_passage', $error);
                print_r($error);
            }
            else {
                @$img3=$this->upload->data('file_name');
            }
        $data = array(
            'title'=>$tname,//Attribute list ( , ) separated
            'fname'=>$writer,
            'blog_cont'=>$message,
            'cust_id'=>3,
            'img1'=>$img1,
            'img2'=>$img2,
            'img3'=>$img3
            // last doesnot contain comma
        );
        if($this->db->insert('tblblog',$data)==true){
            $this->load_admin_blog();

        }else{
            //false block
            echo "done";
        }

    }

    public function upload_blog(){
        //Update the test array
        if(!isset($_POST['rmv'])){
            $test = array(
                'flag' =>1
            );
            $where = "id=" . $_POST['pid'];  //where clause
            $str = $this->db->update_string('tblblog', $test, $where); //fire update qry
            $this->db->query($str);
            $this->load_admin_blog();
        //echo "done";
        }else{
            $test = array(
                'flag' =>0
            );
            $where = "id=" . $_POST['pid'];  //where clause
            $str = $this->db->update_string('tblblog', $test, $where); //fire update qry
            $this->db->query($str);
            $this->load_admin_blog();
        }
        //echo "remove";
    }
}

?>