<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Main_model extends CI_Model {

        private $table_formation = 'mfo_formation';
        private $table_application = 'mfo_application';
        private $table_contact = 'mfo_contact';
        private $table_souscription_formation = 'mfo_souscription';
        function __construct(){
           
            parent::__construct();
        }

       
        public function Add_Message_Contact($name,$mail,$phone,$message){

            $this->db->set('nom_user',$name);
            $this->db->set('adresse_user',$mail);
            $this->db->set('telephone_user',$phone);
            $this->db->set('message_user',$message);
            return $this->db->insert($this->table_contact);
        }

        public function Add_User_adhere($name,$mail,$phone){

            $this->db->set('nom_user',$name);
            $this->db->set('adresse_user',$mail);
            $this->db->set('telephone_user',$phone);
            $this->db->set('telephone_user',$phone);
            return $this->db->insert($this->table_souscription_formation);
        }


        public function Get_All_Formation(){

            return $this->db->select()->order_by('id_formation','desc')->get($this->table_formation)->result();
            
        }

        public function Get_All_Application(){

            return $this->db->select()->order_by('id_app','desc')->get($this->table_application)->result();
           
        }

        public function Get_One_Formation($id){

            $query = $this->db->where('id_formation',$id)->get($this->table_formation)->result();
            return $query;
        }

        public function Get_One_Application($id){

            $query = $this->db->where('id_app',$id)->get($this->table_application)->result();
            return $query;
        }






    }