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
		$data['form']['status'] = json_decode($data['form']['status']);
		foreach($data['form']['status'] as $key=>$value){
			$temps = explode(",",$value);
			foreach($temps as $temp){
				$files[$key][] = $temp;
			}
		}
		$data['files'] = $files;
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
