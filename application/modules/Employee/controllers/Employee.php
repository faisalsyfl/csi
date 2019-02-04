<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('EmployeeModel');
	}

	public function index(){
		$data['employee'] = $this->EmployeeModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	//add data employee
	public function addEmployee(){
		$rules = $this->EmployeeModel->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$employeeData = array(
				'employeeUsername'		=> $this->input->post('addUsername'),
				'employeePassword'		=> md5($this->input->post('addPassword')),
				'employeeEmail'			=> $this->input->post('addEmail'),
				'employeeNIP'			=> $this->input->post('addNIP'),
				'employeePhone'			=> $this->input->post('addPhone'),
				'employeeFirstName'		=> $this->input->post('addFirstName'),
				'employeeLastName'		=> $this->input->post('addLastName'),
				'employeeCreatedAt'		=> date('Y-m-d H:i:s'),
				'employeeUpdateAt'		=> date('Y-m-d H:i:s')
			);
			$addEmployee = $this->EmployeeModel->save($employeeData);
			if (count($addEmployee)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
				redirect('Employee');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Employee');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Employee');
		}
	}

	//get data by id
	public function detailEmployee($id){
		$data = $this->EmployeeModel->getBy(array('EmployeeId' => $id));
        echo json_encode($data);
	}

	public function editEmployee(){
		$id = $this->input->post('editEmployeeId');
		$rules = $this->EmployeeModel->rulesEdit;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			if ($this->input->post('editPassword')) {
				$employeeData = array(
					'employeeUsername'		=> $this->input->post('editUsername'),
					'employeePassword'		=> md5($this->input->post('editPassword')),
					'employeeEmail'			=> $this->input->post('editEmail'),
					'employeeNIP'			=> $this->input->post('editNIP'),
					'employeePhone'			=> $this->input->post('editPhone'),
					'employeeFirstName'		=> $this->input->post('editFirstName'),
					'employeeLastName'		=> $this->input->post('editLastName'),
					'employeeUpdateAt'		=> date('Y-m-d H:i:s')
				);
			}else{
				$employeeData = array(
					'employeeUsername'		=> $this->input->post('editUsername'),
					'employeeEmail'			=> $this->input->post('editEmail'),
					'employeeNIP'			=> $this->input->post('editNIP'),
					'employeePhone'			=> $this->input->post('editPhone'),
					'employeeFirstName'		=> $this->input->post('editFirstName'),
					'employeeLastName'		=> $this->input->post('editLastName'),
					'employeeUpdateAt'		=> date('Y-m-d h:i:s')
				);
			}
			$editEmployee = $this->EmployeeModel->save($employeeData, $id);
			if (count($editEmployee)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully updated.</div>');
				redirect('Employee');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Employee');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Employee');
		}
	}

	public function deleteEmployee($id){
		//var_dump($id);
		$this->EmployeeModel->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is deleted.</div>');
        redirect('Employee');
	}
	
}
