<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfo_admin extends CI_Controller {
    
    function __construct(){
        
        parent::__construct();

    }

    public function index(){
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/login');
    }
    public function Main_Panel(){

        $data['nb_msg'] = $this->admin_model->Count_Message();
        $data['nb_sous'] = $this->admin_model->Count_Souscription();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/index',$data);
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
            $data['nb_msg'] = $this->admin_model->Count_Message();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$data);
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

             $data['nb_msg'] = $this->admin_model->Count_Message();
             $this->load->view('admin_view/header_admin');
             $this->load->view('admin_view/nav_admin',$data);
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
            $data['nb_msg'] = $this->admin_model->Count_Message();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$data);
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
            $data['nb_msg'] = $this->admin_model->Count_Message();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$data);
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
           
            $data['nb_msg'] = $this->admin_model->Count_Message();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$data);
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
            $data['nb_msg'] = $this->admin_model->Count_Message();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$data);
            $this->load->view('admin_view/add_blog');
        }
          
       
    }
/*========================================================================================================================
                                            ICI LES FONCTIONS REPRESENTANT DES PAGES                                                           |
========================================================================================================================*/

    public function Page_Add_App(){

        $data['nb_msg'] = $this->admin_model->Count_Message();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/add_app');
        $this->load->view('admin_view/footer_admin');
    }
//-------------------------------------------------------------------    
    public function Page_Add_Form(){

        $data['nb_msg'] = $this->admin_model->Count_Message();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/add_form');
        $this->load->view('admin_view/footer_admin');
    }
//-------------------------------------------------------------------    
    public function Page_Add_Item_Blog(){

        $data['nb_msg'] = $this->admin_model->Count_Message();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/add_blog');
        $this->load->view('admin_view/footer_admin');
    }
    public function Page_Messages_contact(){
        $data['nb_msg'] = $this->admin_model->Count_Message();
        $data['msg'] = $this->admin_model->Get_All_Msg();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/messages_contact');
        $this->load->view('admin_view/footer_admin');
    }
    public function Page_Souscription_Formation(){
        $data['nb_msg'] = $this->admin_model->Count_Message();
        $data['souscription'] = $this->admin_model->Get_All_Souscription();
        $this->load->view('admin_view/header_admin');
        $this->load->view('admin_view/nav_admin',$data);
        $this->load->view('admin_view/souscription_formation');
        $this->load->view('admin_view/footer_admin');
    }

    public function delete_message(){

        $id_message = $this->uri->segment(3);
        $this->admin_model-> Delete_One_Message($id_message);
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_souscription(){
        $id_user = $this->uri->segment(3);
        $this->admin_model-> Delete_One_Souscription($id_user);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function login_in(){

        $login = strip_tags($this->input->post('login'));
        $pwd = strip_tags($this->input->post('password'));
        $admin = $this->admin_model->Login_Admin($login,$pwd);
        if($admin){
            $_SESSION['nom'] =  $login;
            $_SESSION['nb_msg'] = $this->admin_model->Count_Message();
            $_SESSION['nb_sous'] = $this->admin_model->Count_Souscription();
            $this->load->view('admin_view/header_admin');
            $this->load->view('admin_view/nav_admin',$_SESSION);
            $this->load->view('admin_view/index',$_SESSION);
            $this->load->view('admin_view/footer_admin');
        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function deconnexion(){
        
        session_destroy()
        $this->index();
    }


}