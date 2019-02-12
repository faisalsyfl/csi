<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationForm extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ApplicationFormModel');
	}

	public function index(){
		$data['form'] = $this->ApplicationFormModel->getData();
		$this->template->set('controller', $this);
		$this->template->load_partial('templates/template', 'index', $data);
	}

	//add data Customer
	public function addForm(){
		// $rules = $this->ApplicationFormModel->rules;
		// $this->form_validation->set_rules($rules);
		// if ($this->form_validation->run() == TRUE) {
			$CustomerData = array(
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
				'info_tambahan8'					=> $this->input->post('input_info_tambahan8')
			);
			
			$formId = $this->ApplicationFormModel->save($CustomerData);
			$StatusData = array(
				'formId'				=> $formId,
				'aplikasiSertifikasi'	=> "0,0",
				'kajianAplikasi'		=> "0",
				'penawaran'				=> "0,0,0,0",
				'auditTahap1'			=> "0,0,0,0,0,0,0",
				'auditTahap2'			=> "0,0,0,0,0,0,0,0,0,0",
				'evaluasi'				=> "0,0",
				'sertifikat'			=> "0,0,0,0,0",
			);

			$statusId = $this->ApplicationFormModel->saveStatus($StatusData, $formId);

			if (count($statusId)) {
				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data is successfully added.</div>');
				redirect('Dashboard');
			}else{
				$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Please make sure you fill in all the fields.</div>');
				redirect('Dashboard');
			}

		// }else{
		// 	$this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
		// 	redirect('Customer');
		// }
	}
	
}
