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
/*========================================================================================================================
                                            ICI LES FONCTIONS AJOUTANT  DANS  DB                                                          |
========================================================================================================================*/
    public function Add_Formation_In_database(){

        $config['upload_path'] = './assets/uploads/form/';
		$config['allowed_types'] = 'jpg|JPG|PNG|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin');
            $this->load->view('admin_view/add_form');
        }else{

            $title = strip_tags($this->input->post('titre'));
            $description = strip_tags($this->input->post('description'));
            $chemin= $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            foreach ($chemin as $key => $value) {
                if ($key==='file_name') {

                    $file= './assets/uploads/form/'.$value;
                    break;
                }
            }
             $this->admin_model->Add_Formation($title,$description,$file);
             $this->load->view('admin_view/header_admin');
             $this->load->view('admin_view/nav_admin');
             $this->load->view('admin_view/add_form');
        }
        
    }
//------------------------------------------------------------------------------
    public function Add_Application_In_database(){

        $config['upload_path'] = './assets/uploads/app/';
		$config['allowed_types'] = 'jpg|JPG|PNG|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin');
            $this->load->view('admin_view/add_app');
        }else{
            $title = strip_tags($this->input->post('titre'));
            $description = strip_tags($this->input->post('description'));
            $chemin= $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            foreach ($chemin as $key => $value) {
                if ($key==='file_name') {

                    $file= './assets/uploads/app/'.$value;
                    break;
                }
                
            }
            $this->admin_model->Add_Application($title,$description,$file);
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin');
            $this->load->view('admin_view/add_app');
        }
          
    }
//--------------------------------------------------------------------------------------------
    public function Add_item_blog_In_database(){

        $config['upload_path'] = './assets/uploads/blog';
		$config['allowed_types'] = 'jpg|JPG|PNG|png';
		$config['max_size']	= '500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
           
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin');
            $this->load->view('admin_view/add_blog');
        }else{
            $title = strip_tags($this->input->post('titre'));
            $description = strip_tags($this->input->post('description'));
            $chemin= $this->upload->data();
            $data = array('upload_data' => $this->upload->data());
            foreach ($chemin as $key => $value) {
                if ($key==='file_name') {

                    $file= './assets/uploads/blog/'.$value;
                    break;
                }
                
            }
            $this->admin_model->Add_Item_Blog($title,$description,$file);
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin');
            $this->load->view('admin_view/add_blog');
        }
          
       
    }
/*========================================================================================================================
                                            ICI LES FONCTIONS REPRESENTANT DES PAGES                                                           |
========================================================================================================================*/

    public function Login(){

        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/adminlogin');
        $this->load->view('admin_view/footer_admin');
    }
//-----------------------------------------------------------------
    public function Page_Add_App(){

        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin');
        $this->load->view('admin_view/add_app');
        $this->load->view('admin_view/footer_admin');
    }
//-------------------------------------------------------------------    
    public function Page_Add_Form(){

        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin');
        $this->load->view('admin_view/add_form');
        $this->load->view('admin_view/footer_admin');
    }
//-------------------------------------------------------------------    
    public function Page_Add_Item_Blog(){

        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin');
        $this->load->view('admin_view/add_blog');
        $this->load->view('admin_view/footer_admin');
    }


}