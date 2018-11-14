<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfo_admin extends CI_Controller {
    
    function __construct(){
        
        parent::__construct();

    }

    public function index(){

        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin');
        $this->load->view('admin_view/index');
        $this->load->view('admin_view/footer_admin');

    }



    public function Add_Formation_In_database(){
        $config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'jpg|JPG|PNG|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
        $title = strip_tags($this->input->post('titre'));
        $description = strip_tags($this->input->post('description'));
        if ( ! $this->upload->do_upload()){
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('addarticle', $data);
        }else{
            $chemin= $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            foreach ($chemin as $key => $value) {
                if ($key==='file_name') {

                    $file= './assets/uploads/'.$value;
                }
            }
        }
        $this->admin_model->Add_Formation($title,$description,$file);
        
    }

    public function Add_Application_In_database(){

        $title = strip_tags($this->input->post('titre'));
        $description = strip_tags($this->input->post('description'));
        $file = strip_tags($this->input->post('file'));
        
    }
}