<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regular_info extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');

		$logged_in = $this->session->userdata('is_logged_in');

		if(!$logged_in)
			redirect('Patient_Login');
	}

	public function index()
	{
		$data['patients']=$this->GeneralModel->get_all_patients();
		$data['body_page']='info';
		$this->load->view('structure', $data);
	}

	public function history($patient_id='')
	{
		if($patient_id=='')
			$patient_id=$this->session->userdata('patient_id');

		$data['patient_id']=$patient_id;
		$data['info']=$this->GeneralModel->get_patient_regular_info($patient_id);
		$data['body_page']='history';
		$this->load->view('structure', $data);

	}

	public function save_info()
	{
		$this->GeneralModel->save_info();

		redirect('Regular_info/history');
	}
}