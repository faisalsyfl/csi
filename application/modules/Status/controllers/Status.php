<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('EmployeeModel');
	}

	public function index(){
		// $data['employee'] = $this->EmployeeModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index');

	}
	
}
