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

        $title = strip_tags($this->input->post('titre'));
        $description = strip_tags($this->input->post('description'));
        $chemin= $this->upload->data();
		$data = array('upload_data' => $this->upload->data());
		foreach ($chemin as $key => $value) {
			if ($key==='file_name') {

					$file= './assets/uploads/'.$value;
				}
            }
        
    }

    public function Add_Application_In_database(){

        $title = strip_tags($this->input->post('titre'));
        $description = strip_tags($this->input->post('description'));
        $file = strip_tags($this->input->post('file'));
        
    }
}