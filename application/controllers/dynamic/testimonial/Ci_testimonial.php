<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_testimonial extends CI_Controller {

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

    public function load_testimonial(){
        $query = $this->db->get_where('tbltestimonial'); //For selection Data
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');
        $this->load->view('dynamic/product/add_testimonial',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }

    public function insert_data()
    {
        $tname1=htmlentities($_POST['tname']); //Taking attribute using post
        $tdesignation1 =htmlentities($_POST['tdesignation']); //Taking attribute using post
        $tcompany1=htmlentities($_POST['tcompany']); //Taking attribute using post
        $tcomment1=htmlentities($_POST['tcomment']); //Taking attribute using post

       

        $data = array(
            'tname'=>$tname1,//Attribute list ( , ) separated
            'tdesignation'=>$tdesignation1,
            'tcompany'=>$tcompany1,
            'tcomment'=>$tcomment1,
            
        );
        if($this->db->insert('tbltestimonial',$data)==true){
            $this->load_testimonial();

        }else{
            //false block
            echo "done";
        }
    }

    public function upload_testimonial(){
        //Update the test array
        if(!isset($_POST['rmv'])){
            $test = array(
                'flag' =>1
            );
            $where = "tid=" . $_POST['tid'];  //where clause
            $str = $this->db->update_string('tbltestimonial', $test, $where); //fire update qry
            $this->db->query($str);
            $this->load_testimonial();
        //echo "done";
        }else{
            $test = array(
                'flag' =>0
            );
            $where = "tid=" . $_POST['tid'];  //where clause
            $str = $this->db->update_string('tbltestimonial', $test, $where); //fire update qry
            $this->db->query($str);
            $this->load_testimonial();
        }
    }
}
?>