<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_upload_customer extends CI_Controller {

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

    public function select_view_pending(){
        $this->load->view('dynamic/dashboard/customer/header');
        $names = array('0', '100', '99','2');
        $this->db->where_in('flag', $names);
        //$d=array('flag' => '100');
        $query = $this->db->get('tblproduct');
        $data['data'] = $query->result();
        //      print_r($data);
        $this->load->view('dynamic/product/customer/customer_pending_review',$data);
        $this->load->view('dynamic/dashboard/customer/footer');
    }
    public function update_product_form(){
        $d=array('pid' => $_GET['pid']);
       //var_dump($d);
        $query = $this->db->get_where('tblproduct',$d);
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/admin/header');

        $this->load->view('dynamic/product/update_product',$data);
        $this->load->view('dynamic/dashboard/admin/footer');

    }
     public function update_product(){
         $data=array(
             'description'=>$_POST['pdesc'],
             'height'=>$_POST['pheight'],
             'width'=>$_POST['pwidth'],
             'volume'=>$_POST['pvolume'],
             'color'=>$_POST['pcolor'],
             'diameter'=>$_POST['pdiameter'],
             'catageory'=>$_POST['catageory'],
             'description'=>$_POST['pdesc']
         );
         $where = "pid=".$_POST['pid'];

         $str=$this->db->update_string('tblproduct',$data,$where);
         $this->db->query($str);

         // $this->select_view_upload();
            //echo $str;
     }

    public function upload_stl_file(){
        $this->load->model('dynamic/product/customer/product_model','up');

        $rand = rand(55555,444444);
        if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname'])){
            mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname'], 0777, true);
        }

        if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/stl")){
            mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/stl", 0777, true);
        }
        if(!is_file( getcwd().'/uploads/user/'.$this->session->dir_url."/product/view")){
            mkdir( getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/view", 0777, true);
        }

        $config['upload_path']   = getcwd().'/uploads/user/'.$this->session->dir_url."/product/".$_POST['pname']."/stl/";
        $config['allowed_types'] = 'pdf|zip';
        $config['max_size']      = 200000000;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }
        else {
            $data = array('upload_data' => $this->upload->data());
            $test=array(
                'file_url'=>$this->upload->data('file_name'),
                'pname'=>$_POST['pname'],
                'flag'=>0,
                'uploaded_by'=>$this->session->user_id
            );
            //  $this->load->model('upload_product');
            $this->db->insert('tblproduct',$test);
            $this->select_view_pending();
            echo "Success";
            //$this->load->view('upload_success', $data);

        }


    }


    public function select_customer_pending(){
        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/customer/customer');
        $this->load->view('dynamic/dashboard/customer/footer');
    }
    public function load_panel_data(){
        $user=$this->session->userdata('user');
        $query = $this->db->get_where('tblproduct', array('userId' =>$this->session->user_id,'flag'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/product/upload_product',$data);
        $this->load->view('dynamic/dashboard/admin/footer');

    }

    public function remove_stl_file(){
        $data = array('flag' => '1');

        $where = "userId =".$this->session->user_id." and id=".$_POST['product_id'];

        $str = $this->db->update_string('tblproduct', $data, $where);
        $this->db->query($str);
        //echo $str;
        $this->load_panel_data();
    }


    public function load_quotation(){
        $this->load->view('dynamic/dashboard/customer/header');
        $query = $this->db->get_where('tblproduct', array('flag'=>'0'));
        $data['data'] = $query->result();
        $this->load->view('dynamic/product/customer/product_quotation',$data);
        $this->load->view('dynamic/dashboard/admin/footer');
    }

    public function generate_quotation(){
        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/product/customer/generate_product_quotation');
        $this->load->view('dynamic/dashboard/admin/footer');
    }

    public function update_company_quotation(){
        $data = array('flag' => '2','customer_quote'=>$_POST['price']);
        $data_msg = array('message' => "Pid ".$_POST['pid']." <br> Product : ".$_POST['pname']." Message : ".$_POST['message'],"from_msg"=>$_POST['uid']);

        $where = "pid=".$_POST['pid'];

        $this->db->update('tblproduct', $data, $where);
        $this->db->insert('tbl_admin_message', $data_msg);
        //$str = $this->db->update_string();
        // $this->db->query($str);
$this->select_view_pending();
    }


    public function upload_admin_product(){
        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/product/customer/upload_product_admin');
        $this->load->view('dynamic/dashboard/customer/footer');
    }

    public function addblog_view(){
        $this->load->view('dynamic/dashboard/customer/header');
        $this->load->view('dynamic/product/customer/add_blog');
        $this->load->view('dynamic/dashboard/customer/footer');
    }



    public function select_view_upload(){
        $this->load->view('dynamic/dashboard/customer/header');
        $d=array('uploaded_by'=>$this->session->user_id);
        $query = $this->db->get_where('tblproduct',$d);
        $data['data'] = $query->result();
        //      print_r($data);
        $this->load->view('dynamic/product/customer/admin_product_card',$data);
        $this->load->view('dynamic/dashboard/customer/footer');
    }

    public function upload_front_view(){
        //echo $_POST['pname'];
        $config['upload_path']   = getcwd().'/uploads/admin_product/'.$_POST['pname'].'/';

        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 200000;
        //$config['file_name'] = ;
           //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $test=array(
                'front_View'=>$this->upload->data('file_name')
            );
            echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid=".$_POST['pid'];

            $str=$this->db->update_string('tblproduct',$test,$where);
            echo $str;
            $this->db->query($str);

            //$this->load_panel_data();
            $this->select_view_pending();
            //$this->load->view('upload_success', $data);

        }


    }


    public function upload_top_view(){
        //echo $_POST['pname'];
        $config['upload_path']   = getcwd().'/uploads/admin_product/'.$_POST['pname'].'/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $test=array(
                'top_View'=>$this->upload->data('file_name')
            );
            //echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid=".$_POST['pid'];

            $str=$this->db->update_string('tblproduct',$test,$where);
            $this->db->query($str);

            //$this->load_panel_data();
            $this->select_view_pending();
            //$this->load->view('upload_success', $data);

        }
    }

    public function upload_bottom_view(){
        //echo $_POST['pname'];
        $config['upload_path']   = getcwd().'/uploads/admin_product/'.$_POST['pname'].'/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $test=array(
                'bottom_view'=>$this->upload->data('file_name')
            );
            //echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid = ".$_POST['pid'];

            $str=$this->db->update_string('tblproduct',$test,$where);
            $this->db->query($str);

            //$this->load_panel_data();
            //echo "Success";
            //$this->load->view('upload_success', $data);
            $this->select_view_pending();
        }
    }

    public function upload_right_view(){
        //echo $_POST['pname'];
        $config['upload_path']   = getcwd().'/uploads/admin_product/'.$_POST['pname'].'/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        }

        else {
            $data = array('upload_data' => $this->upload->data());
            $test=array(
                'right_view'=>$this->upload->data('file_name')
            );
            //echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid=".$_POST['pid'];

            $str=$this->db->update_string('tblproduct',$test,$where);
            $this->db->query($str);

            //$this->load_panel_data();
            //echo "Success";
            //$this->load->view('upload_success', $data);
            $this->select_view_pending();
        }
    }

    public function upload_left_view()
    {
        $config['upload_path'] = getcwd() . '/uploads/admin_product/' . $_POST['pname'] . '/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $test = array(
                'left_view' => $this->upload->data('file_name')
            );
            //echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid=" . $_POST['pid'];

            $str = $this->db->update_string('tblproduct', $test, $where);
            $this->db->query($str);

            //$this->load_panel_data();
            $this->select_view_pending();

        }
    }

    public function upload_isometric_view(){

        //echo $_POST['pname'];
        $config['upload_path'] = getcwd() . '/uploads/admin_product/' . $_POST['pname'] . '/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 200000;
        //$config['file_name'] = ;
        //$config['max_width']     = 1024;
        ///$config['max_height']    = 768;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload_passage', $error);
            print_r($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $test = array(
                'isomatric_view' => $this->upload->data('file_name')
            );
            //echo $_POST['pid'];
            //  $this->load->model('upload_product');
            $where = "pid=" . $_POST['pid'];

            $str = $this->db->update_string('tblproduct', $test, $where);
            $this->db->query($str);

            //$this->load_panel_data();
            //  echo "Success";
            //$this->load->view('upload_success', $data);
            $this->select_view_pending();
        }
    }



    public function upload_admin_product_save_admin(){
$rand=rand(66666666,44444444);
        $data=array(
            'pname'=>$_POST['pname'],
            'description'=>$_POST['pdesc'],
            'catageory'=>$_POST['catageory'],
            'height'=>$_POST['pheight'],
            'width'=>$_POST['pwidth'],
            'volume'=>$_POST['pvolume'],
            'color'=>$_POST['pcolor'],
            'diameter'=>$_POST['pdiameter'],
            'MRP'=>$_POST['pmrp'],
            'flag'=>99,
            'uploaded_by'=>$this->session->user_id,
            'rand'=>$rand
        );


        if($this->db->insert('tblproduct',$data)){
            if(!is_file( getcwd().'/uploads/admin_product/'.$rand)){
                mkdir( getcwd().'/uploads/admin_product/'.$rand, 0777, true);
            }
            $this->select_view_upload();
        }else{
            echo "Fail";
        }

    }

    public function upload_product_on_marketplace(){
        $test = array(
            'flag' =>100
        );
        //echo $_POST['pid'];
        //  $this->load->model('upload_product');
        $where = "pid=" . $_POST['pid'];

        $str = $this->db->update_string('tblproduct', $test, $where);
        $this->db->query($str);
        $this->select_view_upload();

    }


    public function select_product_on_marketplace(){
        $this->load->view('dynamic/dashboard/customer/header');
        $d=array('flag' => '100','user_id'=>$this->session->user_id);
        $query = $this->db->get_where('tblproduct',$d);
        $data['data'] = $query->result();
        $this->load->view('dynamic/product/customer/admin_product_card',$data);
        $this->load->view('dynamic/dashboard/customer/footer');

    }



    public function remove_product_on_marketplace(){
        $test = array(
            'flag' =>99
        );
        //echo $_POST['pid'];
        //  $this->load->model('upload_product');
        $where = "pid=" . $_POST['pid'];

        $str = $this->db->update_string('tblproduct', $test, $where);
        $this->db->query($str);
        $this->select_view_upload();
    }

}

?>