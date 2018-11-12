<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome extends CI_Controller {

        private $table_formation = 'mfo_formation';
        function __construct(){
           
            parent::__construct();
        }

        public function add_formation($titre,$description,$file){

            $this->db->set('',$titre);
            $this->db->set('',$description);
            $this->db->set('',$file);
            return $this->db->insert($this->table_formation);
        }

    }