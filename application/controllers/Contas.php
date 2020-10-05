<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contas extends MY_Controller {

    public function index() {
        echo 'Lista de todas as contas';
    }

    public function pagar($mes = 0, $ano = 0) {
        $this->load->model('ContasModel', 'conta');
        $this->conta->cria('pagar');
        $v['lista'] = $this->conta->lista('pagar');
        $v['tipo'] = 'pagar';
        $html = $this->load->view('contas/lista_contas', $v, true);
        $this->show($html);
    }

    public function receber($mes = 0, $ano = 0) {
        
    }

}

