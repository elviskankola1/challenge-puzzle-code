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
		$this->load->view('formation');
	}
//========================================================================================================
	public function app(){
		$this->load->view('app');
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
		if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
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
		$data_accepte =strip_tags( $this->input->post('date'));
		//ICI REQUETE BASE DE DONNEES
	}

}
