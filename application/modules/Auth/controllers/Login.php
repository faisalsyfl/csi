<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('Mdl_COA');
	}

	public function index(){
		if(isset($_SESSION['username']) && isset($_SESSION['level_u_id'])){
				
			$_SESSION['loc_menu'] = 9;
			$this->template->set('controller', $this);
			$this->template->load_partial('templates/template', 'COA_content');
					
		}else{
			redirect('Master/Login');
		}
	}
}
