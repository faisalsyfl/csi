<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('Mdl_COA');
	}

	public function index(){
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index');

	}
}
