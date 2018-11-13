<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Main_model extends CI_Model {

        private $table_formation = 'mfo_formation';
        private $table_application = 'mfo_application';
        private $table_contact = 'mfo_contact';
        function __construct(){
           
            parent::__construct();
        }

       
        public function Add_Message_Contact($name,$mail,$phone,$message){

            $this->db->set('',$name);
            $this->db->set('',$mail);
            $this->db->set('',$phone);
            $this->db->set('',$message);
            return $this->db->insert($this->table_contact);
        }

        public function Add_User_adhere($name,$mail,$phone,$date){

            $this->db->set('',$name);
            $this->db->set('',$mail);
            $this->db->set('',$phone);
            $this->db->set('',$date);
            return $this->db->insert($this->table_contact);
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

        public function Get_One_Application($id){

            $query = $this->db->where('id_application',$id)->get($this->table_application);
            return $query;
        }






    }