<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('index');
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
		$data['formation'] = $this->main_model->Get_All_Formation();
		$this->load->view('formation',$data);
	}
//========================================================================================================
	public function app(){
		$data['application'] = $this->main_model->Get_All_Application();
		$this->load->view('app',$data);
	}
//========================================================================================================
	public function detail_app(){
		$this->load->view('detail-app');
	}
//========================================================================================================
	public function detail_formation(){
		$this->load->view('detail-formation');
	}
//========================================================================================================
	public function contactez_nous(){
		$name = strip_tags($this->input_>post('nom'));
		$mail = strip_tags($this->input->post('mail'));
		$phone = strip_tags($this->input->post('phone'));
		$message =strip_tags( $this->input->post('message'));
		if (filter_var($mail,FILTER_VALIDATE_EMAIL == true)) {
			$this->main_model-> Add_Message_Contact($name,$mail,$phone,$message);
			$this->load->view('');
		}else{
			$this->load->view('');
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
