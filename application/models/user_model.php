<?php

class user_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
    }
    
    public function validalogin($nome,$senha){
        $query = $this->db->where('login', $nome)->where('password', $senha)->get('users');
        $login_test = $query->row();

        if($login_test){
            echo 'voce entrou';
        }
        else{
            echo'senha ou login errado';
        }
    }
}
