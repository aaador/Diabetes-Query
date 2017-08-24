<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');
	}

	public function index()
	{
		$data['body_page']='home';
		$this->load->view('structure', $data);
	}
}
