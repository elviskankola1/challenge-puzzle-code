<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin_model extends CI_Model {

        private $table_formation = 'mfo_formation';
        private $table_application = 'mfo_application';

        function __construct(){
           
            parent::__construct();
        }
    }