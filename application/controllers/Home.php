<?php
    defined('BASEPATH') OR exit('No direct script access alowed');


    class HOME extends CI_Controller{

        public function index(){
            $this->load->view('common/cabecalho');
            $this->load->view('common/navbar');
            $this->load->view('common/rodape');       
         }
        
    }