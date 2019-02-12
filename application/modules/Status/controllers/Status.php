<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('StatusModel');
	}

	public function index(){
		$data['status'] = $this->StatusModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	public function updateStatus(){
		//var_dump($id);
		$statusId = $this->input->post('editStatusId');
		$inputAplikasiSertifikasi1 = $this->input->post('inputAplikasiSertifikasi1');
		$inputAplikasiSertifikasi2 = $this->input->post('inputAplikasiSertifikasi2');

		$inputAplikasiSertifikasi = $inputAplikasiSertifikasi1."0,0".$inputAplikasiSertifikasi2;
		$statusData = array(
			'aplikasiSertifikasi'	=> $inputAplikasiSertifikasi
		// 	'kajianAplikasi'	=> implode(",",$this->input->post('inputKajianAplikasi')),
		// 	'penawaran'	=> implode(",",$this->input->post('inputPenawaran')),
		// 	'auditTahap1'	=> implode(",",$this->input->post('inputAuditTahap1')),
		// 	'auditTahap2'	=> implode(",",$this->input->post('inputAuditTahap2')),
		// 	'evaluasi'	=> implode(",",$this->input->post('inputEvaluasi')),
		// 	'sertifikat'	=> implode(",",$this->input->post('inputSertifikat'))
		);

		$editStatus = $this->StatusModel->save($statusData, $statusId);
	}

	public function convertToBool($array){
		for($i =0; $i<count($array); $i++){
			if(isset($array[$i])){
				$array[$i] = 1;
			}else{
				$array[$i] = 0;
			}
		}

		return($array);
	}
	
}
