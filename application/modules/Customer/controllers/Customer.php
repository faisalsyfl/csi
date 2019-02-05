<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CustomerModel');
	}

	public function index(){
		$data['customer'] = $this->CustomerModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	//add data Customer
	public function addCustomer(){
		$rules = $this->CustomerModel->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$CustomerData = array(
				'consumentName'		=> $this->input->post('addName'),
				'consumentAddress'		=> $this->input->post('addAddress'),
				'consumentRegional'		=> $this->input->post('addRegional'),
				'consumentEmail'		=> $this->input->post('addEmail'),
				'consumentPhone'		=> $this->input->post('addPhone'),
				'consumentFax'			=> $this->input->post('addFax'),
				'consumentWebsite'		=> $this->input->post('addWebsite'),
				'consumentCreatedAt'	=> date('Y-m-d H:i:s'),
				'consumentUpdateAt'		=> date('Y-m-d H:i:s')
			);
			$addCustomer = $this->CustomerModel->save($CustomerData);
			if (count($addCustomer)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
				redirect('Customer');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Customer');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Customer');
		}
	}

	//get data by id
	public function detailCustomer($id){
		$data = $this->CustomerModel->getBy(array('consumentId' => $id));
        echo json_encode($data);
	}

	public function editCustomer(){
		$id = $this->input->post('editConsumentId');
		$rules = $this->CustomerModel->rulesEdit;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$CustomerData = array(
				'consumentName'			=> $this->input->post('editName'),
				'consumentAddress'		=> $this->input->post('editAddress'),
				'consumentRegional'		=> $this->input->post('editRegional'),
				'consumentEmail'		=> $this->input->post('editEmail'),
				'consumentPhone'		=> $this->input->post('editPhone'),
				'consumentFax'			=> $this->input->post('editFax'),
				'consumentWebsite'		=> $this->input->post('editWebsite'),
				'consumentUpdateAt'		=> date('Y-m-d H:i:s')
			);
		
			$editCustomer = $this->CustomerModel->save($CustomerData, $id);
			if (count($editCustomer)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully updated.</div>');
				redirect('Customer');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Customer');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Customer');
		}
	}

	public function deleteCustomer($id){
		//var_dump($id);
		$this->CustomerModel->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is deleted.</div>');
        redirect('Customer');
	}
	
}
