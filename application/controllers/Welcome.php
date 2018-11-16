<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('accueil');
	}
//=========================================================================================================
	public function apropos(){
		
		$this->load->view('about');
	}
//=========================================================================================================
	public function contact(){
		$this->load->view('contact');
	}
//========================================================================================================
	public function formation(){
		$data['form'] = $this->main_model->Get_All_Formation();
		$this->load->view('formation',$data);
	}
//========================================================================================================
	public function application(){
		$data['application'] = $this->main_model->Get_All_Application();
		$this->load->view('app',$data);
	}
//========================================================================================================
	public function detail_app(){
		$id_app = $this->uri->segment(3);
		$data['application'] = $this->main_model->Get_One_Application($id_app);
		$this->load->view('detail-app',$data);
	}
//========================================================================================================
	public function detail_formation(){
		$id_form = $this->uri->segment(3);
		$data['form'] = $this->main_model->Get_One_Formation($id_form);
		$this->load->view('detail-formation',$data);
	}
//========================================================================================================
	public function contactez_nous(){
		$name_user = strip_tags($this->input->post('nom'));
		$mail_user = strip_tags($this->input->post('mail'));
		$number_user = strip_tags($this->input->post('phone'));
		$message_user =strip_tags( $this->input->post('message'));
		if (filter_var($mail_user,FILTER_VALIDATE_EMAIL) && preg_match('#^(097|085|084|090)+[0-9]{7}$#',$number_user)) {
			$this->main_model-> Add_Message_Contact($name_user,$mail_user,$number_user,$message_user);
			$this->load->view('succes');
			$this->load->view('contact');
			
		}else{
			
			$this->load->view('contact');
		}
	}
//==================================================================================================
	public function adhere_formation(){

		$name_user = strip_tags($this->input_>post('nom'));
		$mail_user = strip_tags($this->input->post('mail'));
		$mumber_user = strip_tags($this->input->post('phone'));
		$date_accepte =strip_tags( $this->input->post('date'));
		if (filter_var($mail_user,FILTER_VALIDATE_EMAIL == true)) {
			$this->main_model->Add_User_adhere($name_user,$mail_user,$number_user,$date_accepte);
		}else{
			$this->load->view('');
		}
	}

}
