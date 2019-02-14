<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ApplicationForm/ApplicationFormModel');
	}

	public function index($id=NULL){
		$data['form'] = $this->ApplicationFormModel->selectById($id)->row_array();
		$data['form']['status'] = json_decode($data['form']['status']);
		print_r($data['form']['status']);
		foreach($data['form']['status'] as $key=>$value){
			if(is_string($value)){
				$temps = explode(',',$value);
				print_r($temps);
				foreach($temps as $temp){
					$files[$key][] = $temp;
				}
				echo ".";
			}else{
				echo "?";
				$files[$key] = $value;
			}
		}
		echo "<pre>";
		print_r($files);
		echo "</pre>";
		$data['files'] = $files;
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

		// for($i=1;$i<=7;$i++){
		// 	echo $data['form']['status'];
		// 	$data['form']['status'][$i] = explode(",",$data['form']['status'][$i]);
		// }
		// echo "<pre>";
		// print_r($files);
		// echo "</pre>";
		// print_r($data['form']);
		// $data['status'] = $this->StatusModel->getData();

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
		$config['file_name']            = $post['doc']."_".time();
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

		$data['form'] = $this->ApplicationFormModel->selectById($post['formId'])->row_array();
		$data['form']['status'] = json_decode($data['form']['status']);
		foreach($data['form']['status'] as $key=>$value){
			$files[$key][] = $value;
		}
		$filedata = $this->upload->data();
		$temp = explode(".",$post['doc']);
		$files[$temp[0]][$temp[1]-1] = ['valid'=>'0','name'=>$filedata['name']];
		$x = $this->ApplicationFormModel->save(['status'=>json_encode($files)],$post['formId']);
		// echo "<pre>";
		// print_r($files);
		// echo "</pre>";
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
