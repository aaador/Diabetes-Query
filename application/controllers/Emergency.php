<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['body_page']='emergency';
		$this->load->view('structure', $data);
	}
}