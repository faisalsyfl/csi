<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ApplicationForm/ApplicationFormModel');
		$this->load->model('FilesModel');
	}

	public function index($id=NULL){
		$data['form'] = $this->ApplicationFormModel->selectById($id)->row_array();
		$temp = $this->FilesModel->selectByFormId($id)->result();
		// print_r($temp);
		if(count($temp) > 0){
			foreach($temp as $ss){
				$x = explode(".",$ss->doc);
				$files[$x[0]][$x[1]-1] = $ss->filename;
			}
		}else{
			$files = array();
		}

		// echo "<pre>";
		// print_r($files);
		// echo "</pre>";
		$data['doc'] = array(
		'1.1' => 'Formulir Aplikasi',
		'1.2' =>'Kelengkapan Dokumen',
		'2.1'   => 'Kajian Aplikasi Sertifikasi',
		'3.1' => 'Penawaran',
		'3.2' =>'Perjanjian',
		'3.3' =>'Invoice',
		'3.4' => 'Kuitansi',
		'4.1' =>'Notifikasi Tim Audit Tahap 1',
		'4.2' =>'Rencana Audit Tahap 1',
		'4.3' =>'Audit Kecukupan',
		'4.4' =>'Daftar Hadir Tahap 1',
		'4.5' =>'Laporan Ketidaksesuaian',
		'4.6' =>'Laporan Audit Tahap 1',
		'4.7' =>'Verifikasi Ketidaksesuaian Tahap 1',
		'5.1' =>'Notifikasi Tim Audit Tahap 2',
		'5.2' =>'Rencana Audit Tahap 2',		
		'5.3' =>'Daftar Hadir Tahap 2',		
		'5.4' =>'Lembar Periksa Audit Tahap 2',		
		'5.5' =>'Laporan Ketidaksesuaian Tahap 2',		
		'5.6' =>'Laporan Audit Tahap 2',		
		'5.7' =>'Buku Harian Auditor',		
		'5.8' =>'Pemantauan Lapangan Personnel Sertifikasi',		
		'5.9' =>'Verifikasi Ketidaksesuaian Tahap 2',		
		'5.1' =>'Keterangan Bebas Konflik Kepentingan',		
		'6.1'=>'Notifikasi Tim Evaluasi',		
		'6.2'=>'Notifikasi Laporan Evaluasi',		
		'7.1'=>'Memo Dinas Penerbitan Sertifikat',		
		'7.2'=>'Form Verifikasi Sertifikat/Draft Sertifikat',		
		'7.3'=>'Sertifikat',		
		'7.4'=>'Program Survailen'
		);

		$data['files'] = $files;
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);

	}

	public function updateStatus(){
		$post = $this->input->post();
		print_r($post);

		$config['upload_path']          = './uploads/aplikasi';
		$config['allowed_types']        = '*';
		$config['max_size']             = 0;
		$config['overwrite']            = true;
		// $config['file_name']            = $post['doc']."_".time();
		$this->load->library('upload', $config);
		$filename = '';
		if ( ! $this->upload->do_upload('addFileupload')){
			$error = array('error' => $this->upload->display_errors());
			$this->session->set_flashdata('error', $error['error']);
			print_r($error);
		}else{
			$data['gambar'] = array('upload_data' => $this->upload->data());
			$filename = $data['gambar']['upload_data']['file_name'];
		}

		$post['filename'] = $filename;
		$id = $this->FilesModel->save($post);


		// $all = $this->FilesModel->getDat
		redirect('Status/index/'.$post['formId']);
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
