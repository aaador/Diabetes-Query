<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medication extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['body_page']='medication';
		$this->load->view('structure', $data);
	}
}
