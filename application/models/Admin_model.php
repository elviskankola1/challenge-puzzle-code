<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model {

        private $table_formation = 'mfo_formation';
        private $table_application = 'mfo_application';

        function __construct(){
           
            parent::__construct();
        }

        public function Add_Formation($titre,$description,$file){

            $this->db->set('',$titre);
            $this->db->set('',$description);
            $this->db->set('',$file);
            return $this->db->insert($this->table_formation);
        }

    }