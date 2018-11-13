<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model {

/*========================================================================================================================
                                                 ICI LES ATTRIBUTS DE LA CLASSE && SON CONSTRUCTEUR                                                             |
========================================================================================================================*/

        private $table_formation = 'mfo_formation';
        private $table_application = 'mfo_application';

        function __construct(){
           
            parent::__construct();
        }
/*========================================================================================================================
                                                 ICI LES FONCTIONS D'AJOUT DANS DB                                                            |
========================================================================================================================*/
        public function Add_Formation($titre,$description,$file){

            $this->db->set('titre_formation',$titre);
            $this->db->set('description_formation',$description);
            $this->db->set('file_formation',$file);
            return $this->db->insert($this->table_formation);
        }
        //-----------------------------------------------------------------
        public function Add_Application($titre,$description,$file){

            $this->db->set('titre_app',$titre);
            $this->db->set('description_app',$description);
            $this->db->set('file_app',$file);
            return $this->db->insert($this->table_application);
        }

/*========================================================================================================================
                                             ICI LES FONCTIONS QUI COMPTE DANS DB                                                            |
========================================================================================================================*/

        public function Count_Formation(){

            return (int) $this->db->count_all_results($this->table_formation);
        }
        //--------------------------------------------------------------------
        public function Count_Application(){

            return (int) $this->db->count_all_results($this->table_application);
        }
        //----------------------------------------------------------------------
        public function Count_Message(){

            return (int) $this->db->count_all_results($this->table_contact);
        }
/*========================================================================================================================
                                            ICI LES FONCTIONS QUI RECCUPERENT DAS DB                                                            |
========================================================================================================================*/

        public function Get_One_Formation($id){

            $query = $this->db->where('id_formation',$id)->get($this->table_formation);
            return $query;
        }
        //------------------------------------------------------------------------------
        public function Get_One_Application($id){

            $query = $this->db->where('id_app',$id)->get($this->table_application);
            return $query;
        }
        
    }