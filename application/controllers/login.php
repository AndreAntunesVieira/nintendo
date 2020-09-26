<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index(){

		//Aqui vai ter que entrar o cógdigo pra fazer login
		
		$login = $_POST['login'];
		$senha = $_POST['password'];
		$this->load->model('user_model');

		$this->user_model->validalogin($login,$senha);





		//Pode usar e criar quantas Models tu quiser


		//Depois de logar vai redirecionar para /consoles
	}
}
