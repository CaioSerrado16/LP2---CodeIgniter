<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class LoginModel extends CI_Model{

    public function verifica() {
        if(sizeof($_POST) == 0) return 0;
        
        if(strcmp($_POST['email'], 'caio@caio.com') == 0)
            if(strcmp($_POST['senha'], '123') == 0){
                redirect('Home');
                return 0;
            }
        return 1;
        }

}