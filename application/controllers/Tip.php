<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tip extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['tips']=$this->GeneralModel->get_all_tips();
		$data['body_page']='tip';
		$this->load->view('structure', $data);
	}

	public function add_tip($patient_id)
	{
		$data['patient_id']=$patient_id;
		$data['body_page']='add_tip';
		$this->load->view('structure', $data);
	}

	public function save_tip($patient_id)
	{
		$this->GeneralModel->save_tip($patient_id);

		redirect('Home');
	}
}