<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organization extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('OrganizationModel');
	}

	public function index(){
		$data['organization'] = $this->OrganizationModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	//add data Customer
	public function addOrganization(){
		$rules = $this->OrganizationModel->rules;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$organizationData = array(
				'organizationName'			=> $this->input->post('addName'),
				'organizationPhone'			=> $this->input->post('addPhone'),
				'organizationWebsite'		=> $this->input->post('addWebsite'),
				'organizationType'			=> $this->input->post('addType'),
				'organizationCreatedAt'		=> date('Y-m-d H:i:s'),
				'organizationUpdateAt'		=> date('Y-m-d H:i:s')
			);
			$idOrganization = $this->OrganizationModel->save($organizationData);
			if (count($idOrganization)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
				redirect('Organization');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Organization');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Organization');
		}
	}

	//get data by id
	public function detailOrganization($id){
		$data = $this->OrganizationModel->getBy(array('organizationId' => $id));
        echo json_encode($data);
	}

	public function editOrganization(){
		$id = $this->input->post('editOrganizationId');
		$rules = $this->OrganizationModel->rulesEdit;
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == TRUE) {
			$OrganizationData = array(
				'organizationName'			=> $this->input->post('editName'),
				'organizationPhone'			=> $this->input->post('editPhone'),
				'organizationWebsite'		=> $this->input->post('editWebsite'),
				'organizationType'			=> $this->input->post('editType'),
				'organizationUpdateAt'		=> date('Y-m-d H:i:s')
			);
		
			$idOrganization = $this->OrganizationModel->save($OrganizationData, $id);
			if (count($idOrganization)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully updated.</div>');
				redirect('Organization');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Organization');
			}
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('Organization');
		}
	}

	public function deleteOrganization($id){
		//var_dump($id);
		$this->OrganizationModel->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is deleted.</div>');
        redirect('Organization');
	}
	
}
