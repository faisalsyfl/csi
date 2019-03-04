<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationForm extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ApplicationFormModel');
		// $this->load->model('Status/StatusModel');
		$this->load->model('Organization/OrganizationModel');
	}

	public function index(){
		$data['organization'] = $this->OrganizationModel->getData();
		$data['form'] = $this->ApplicationFormModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);
	}

	//add data Customer
	public function addForm(){
		// upload foto
		date_default_timezone_set("Asia/Bangkok");

        $config['upload_path']          = './uploads/formDocs';
        $config['allowed_types']        = '*';
        $config['max_size']             = 0;
        $config['overwrite']            = true;
        
        $config['file_name'] = "Akte Notaris_".time();
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('input_file_dokumen_persyaratan1')){
        	
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->session->set_flashdata('error', $error['error']);
        }else{
        	// echo "berhasil";
            $file1= $this->upload->data();
			$filename1 = $file1['file_name'];
        }

        $config['file_name'] = "Struktur Organisasi_".time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('input_file_dokumen_persyaratan2')){
        	
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->session->set_flashdata('error', $error['error']);
        }else{
        	// echo "berhasil";
            $file2= $this->upload->data();
			$filename2 = $file2['file_name'];
        }

        $config['file_name'] = "Interaksi Proses_".time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('input_file_dokumen_persyaratan3')){
        	
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->session->set_flashdata('error', $error['error']);
        }else{
        	// echo "berhasil";
            $file3= $this->upload->data();
			$filename3 = $file3['file_name'];
        }

        $config['file_name'] = "Layout Area_".time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('input_file_dokumen_persyaratan4')){
        	
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->session->set_flashdata('error', $error['error']);
        }else{
        	// echo "berhasil";
            $file4 = $this->upload->data();
			$filename4 = $file4['file_name'];
        }

        $config['file_name'] = "Rekaman Internal_".time();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('input_file_dokumen_persyaratan5')){
        	
            $error = array('error' => $this->upload->display_errors());
            // print_r($error);
            $this->session->set_flashdata('error', $error['error']);
        }else{
        	// echo "berhasil";
            $file5 = $this->upload->data();
			$filename5 = $file5['file_name'];
        }

		$StatusData = array(
			1	=> "0,0",
			2	=> "0",
			3	=> "0,0,0,0",
			4	=> "0,0,0,0,0,0,0",
			5	=> "0,0,0,0,0,0,0,0,0,0",
			6	=> "0,0",
			7	=> "0,0,0,0",
		);

		$FormData = array(
			'sertifikasi_manajemen_diminati'	=> $this->input->post('input_sertifikasi_manajemen'),
			'status_aplikasi_sertifikasi'		=> $this->input->post('input_status_aplikasi'),
			'nama_organisasi'					=> $this->input->post('input_nama_organisasi'),
			'tlp_fax'							=> $this->input->post('input_tlp_fax'),
			'website'							=> $this->input->post('input_website'),
			'jenis_organisasi'					=> $this->input->post('input_jenis_organisasi'),
			'jml_manajemen'						=> $this->input->post('input_jml_manajemen'),
			'jml_admin'							=> $this->input->post('input_jml_admin'),
			'jml_parttime'						=> $this->input->post('input_jml_parttime'),
			'jml_nonpermanen'					=> $this->input->post('input_jml_nonpermanen'),
			'jml_opl_shift1'					=> $this->input->post('input_jml_opl_shift1'),
			'jml_opl_shift2'					=> $this->input->post('input_jml_opl_shift2'),
			'jml_opl_shift3'					=> $this->input->post('input_jml_opl_shift3'),
			'pekerjaan_shift'					=> $this->input->post('input_pekerjaan_shift'),
			'jml_personil'						=> $this->input->post('input_jml_personil'),
			'alamat_kantor_pusat'				=> $this->input->post('input_alamat_kantor_pusat'),
			'l_kegiatan_utama'					=> $this->input->post('input_l_kegiatan_utama'),
			'p_kegiatan_utama'					=> $this->input->post('input_p_kegiatan_utama'),
			'multilokasi'						=> $this->input->post('input_multilokasi'),
			'ruanglingkup_sertifikasi'			=> $this->input->post('input_ruanglingkup_sertifikasi'),
			'info_tambahan1'					=> $this->input->post('input_info_tambahan1'),
			'info_tambahan2'					=> $this->input->post('input_info_tambahan2'),
			'info_tambahan3'					=> $this->input->post('input_info_tambahan3'),
			'info_tambahan4'					=> $this->input->post('input_info_tambahan4'),
			'info_tambahan5'					=> $this->input->post('input_info_tambahan5'),
			'info_tambahan6'					=> $this->input->post('input_info_tambahan6'),
			'info_tambahan7'					=> $this->input->post('input_info_tambahan7'),
			'info_tambahan8'					=> $this->input->post('input_info_tambahan8'),
			'file_dokumen_persyaratan1'			=> $filename1,
			'file_dokumen_persyaratan2'			=> $filename2,
			'file_dokumen_persyaratan3'			=> $filename3,
			'file_dokumen_persyaratan4'			=> $filename4,
			'file_dokumen_persyaratan5'			=> $filename5,
			'status'							=>	json_encode($StatusData)
		);
			
			$formId = $this->ApplicationFormModel->save($FormData);
			// $lastId = $this->ApplicationFormModel->save($status,$formId);
			// $statusId = $this->StatusModel->save($StatusData);

			// if (count($statusId)) {
			// 	$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
			// 	redirect('Dashboard');
			// }else{
			// 	$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
			// 	redirect('Dashboard');
			// }

		// }else{
		// 	$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('ApplicationForm/lists');
		// }
	}
	public function lists(){
		$data['form'] = $this->ApplicationFormModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'all', $data);		
	}

	public function detail($id){
		$data['form'] = $this->ApplicationFormModel->selectById($id)->result_array();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'indexDetail', $data);		
	}
	
}
