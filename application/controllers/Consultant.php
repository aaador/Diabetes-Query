<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['doctors']=$this->GeneralModel->get_all_doctors();
		$data['body_page']='consultant';
		$this->load->view('structure', $data);
	}
}