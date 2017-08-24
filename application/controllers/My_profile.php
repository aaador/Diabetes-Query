<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_profile extends CI_Controller {

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
		$data['info']=$this->GeneralModel->get_my_info();
		$data['body_page']='my_profile';
		$this->load->view('structure', $data);
	}
}