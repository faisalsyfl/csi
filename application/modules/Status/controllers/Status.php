<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('StatusModel');
		$this->load->model('ApplicationForm/ApplicationFormModel');
	}

	public function index($id=NULL){
		$data['form'] = $this->ApplicationFormModel->selectById($id)->row_array();
		// print_r($data['form']);
		// $data['status'] = $this->StatusModel->getData();
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

	public function statusSave(){


		//Upload file bagan alir
		$config['upload_path']          = './uploads/aplikasi';
		$config['allowed_types']	= '*';
		$config['max_size']			= 0;				
		date_default_timezone_set("Asia/Bangkok");
		$config['file_name']		= "test_".time();
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('docsx1')){
			/*Jika Gagal Upload*/
			echo "gagal";
			echo $this->upload->display_errors();
		} else{
			echo "sukses";

		}			
		
		// $this->ModelRMP->update($idr,$post);
		// redirect('RMP/tiga/'.$id);


	}	
}
