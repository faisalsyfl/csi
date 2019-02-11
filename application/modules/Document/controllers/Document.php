<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DocumentModel');
	}

	public function index(){
		$data['document'] = $this->DocumentModel->getDataJoin();
		// print_r($data['document']);
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	//add document
	public function addDocument(){
		$idEmployee = $this->session->userdata('employeeId');	//get id employee login
		//upload foto
		$config['upload_path']          = './uploads/documents';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|svg|psd|pdf|doc|docx|excel|csv';
		$config['max_size']             = 2048;
		$config['overwrite']            = true;
		$this->load->library('upload', $config);
		$filename = '';
		if ( ! $this->upload->do_upload('addFileupload')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error['error']);
		}else{
			$data['gambar'] = array('upload_data' => $this->upload->data());
			$filename = $data['gambar']['upload_data']['file_name'];
		}
		$document = array(
			'documentEmployeeId' => 1, //replace to $idEmployee, if you want to match the user who is logged in

			'documentFileUpload'	=> $filename,
			'documentFilename'	=> $this->input->post('addFilename'),
			'created_at'		=> date('Y-m-d H:i:s'),
			'updated_at'		=> date('Y-m-d H:i:s')
		); 
		$addDocument = $this->DocumentModel->save($document);
		if (count($addDocument)) {
			$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
			redirect('Document');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
			redirect('Document');
		}
	}

	//get data by id
	public function detailDocument($id){
		$data = $this->DocumentModel->getBy(array('documentId' => $id));
        echo json_encode($data);
	}

	public function editDocument(){
		$id = $this->input->post('editDocumentId');
		$idEmployee = $this->session->userdata('employeeId');	//get id employee login
		$file = '';
		$config['upload_path']          = './uploads/documents';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|svg|psd|pdf|doc|docx|excel|csv';
		$config['max_size']             = 2048;
		$config['overwrite']            = true;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('editFileupload')){
            $error = array('error' => $this->upload->display_errors());
            //var_dump($error);
        }else{
            $file = array('upload_data' => $this->upload->data());
		}

		if ($file) {
            $filename = $file['upload_data']['file_name'];            
        } else {
            $filename = $this->input->post('old-file');
		}
		
		$document = array(
			'documentLastUpdate' => 1, //replace to $idEmployee, if you want to match the user who is logged in
			'documentFileUpload'	=> $filename,
			'documentFilename'	=> $this->input->post('editFilename'),
			'updated_at'		=> date('Y-m-d H:i:s')
		);

		$updateDocument = $this->DocumentModel->save($document, $id);
		if(count($updateDocument)){
			$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully updated.</div>');
			redirect('Document');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
			redirect('Document');
		}	
	}

	public function deleteDocument($id){
		//var_dump($id);
		$this->DocumentModel->delete($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is deleted.</div>');
        redirect('Document');
	}
	
}
