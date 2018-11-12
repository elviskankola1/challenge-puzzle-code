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
		$nom = $this->input_>post('nom');
		$mail = $this->input->post('mail');
		$mumber = $this->input->post('phone');
		$message = $this->input->post('message');
		//ICI REQUETE BASE DE DONNEES
	}
//==================================================================================================
	public function adhere_formation(){

		$name_user = $this->input_>post('nom');
		$mail_user = $this->input->post('mail');
		$mumber_user = $this->input->post('phone');
		$data_accepte = $this->input->post('date');
		//ICI REQUETE BASE DE DONNEES
	}

}
