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

        public function Add_Application($titre,$description,$file){

            $this->db->set('',$titre);
            $this->db->set('',$description);
            $this->db->set('',$file);
            return $this->db->insert($this->table_application);
        }


        public function Count_Formation(){

            return (int) $this->db->count_all_results($this->table_formation);
        }

        public function Count_Application(){

            return (int) $this->db->count_all_results($this->table_application);
        }

        public function Count_Message(){

            return (int) $this->db->count_all_results($this->table_contact);
        }
    }