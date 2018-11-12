<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function apropos(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function formation(){
		$this->load->view('formation');
	}
	public function app(){
		$this->load->view('app');
	}
	public function detail_app(){
		$this->load->view('detail-app');
	}
	public function detail_formation(){
		$this->load->view('detail-formation');
	}
	
}
