<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Welcome extends CI_Controller {

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

        public function Add_Applixcation($titre,$description,$file){

            $this->db->set('',$titre);
            $this->db->set('',$description);
            $this->db->set('',$file);
            return $this->db->insert($this->table_application);
        }

        public function Get_All_Formation(){

            $query = $this->db->select()->get($this->table_formation);
            return $query;
        }

        public function Get_All_Application(){

            $query = $this->db->select()->get($this->table_application);
            return $query;
        }

        public function Get_One_Formation($id){

            $query = $this->db->where('id_formation',$id)->get($this->table_formation);
            return $query;
        }




    }