<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('GeneralModel');

		$is_logged_in = $this->session->userdata('is_logged_in');
		$type = $this->session->userdata('type');

		if(!$is_logged_in || $type==1)
			redirect('Patient_Login');
	}

	public function index()
	{
		$data['body_page']='check';
		$this->load->view('structure', $data);
	}

	public function process_ans()
	{
		$ans1 = $this->input->post('ques1');
		$ans2 = $this->input->post('ques2');
		$ans3 = $this->input->post('ques3');
		$ans4 = $this->input->post('ques4');
		$ans5 = $this->input->post('ques5');

		$total = $ans1+$ans2+$ans3+$ans4+$ans5;

		$this->GeneralModel->save_value($total);

		$data['total']=$total;
		$data['body_page']='check_result';
		$this->load->view('structure', $data);
	}
}