<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfo_admin extends CI_Controller {
    
    function __construct(){
        
        parent::__construct();

    }

    public function Add_Formation_In_database(){

        $title = strip_tags($this->input->post('titre'));
        $description = strip_tags($this->input->post('description'));
        $file = strip_tags($this->input->post('file'));
        
    }
}