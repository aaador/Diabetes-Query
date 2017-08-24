<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('LoginModel');
	}

	public function index()
	{
		$data['only_body']=true;
		$data['body_page']='sign_up';
		$this->load->view('structure', $data);
	}

	public function save_patient()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<i class="font-icon font-icon-warning"></i>', '</div>');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[patients.patient_email]');

		if($this->form_validation->run() == FALSE)
		{

			$data['only_body']=true;
			$data['body_page']='sign_up';
			$this->load->view('structure', $data);

		}else{

			$email = $this->input->post('email');

			$this->LoginModel->save_patient();

			$patient = $this->LoginModel->get_patient_detail($email);

			$data = array(

				'patient_id'	=> $patient['patient_id'],

				'patient_email'	=> $patient['patient_email'],

				'is_logged_in'	=> true,

				'type'		=> 0

				);

			$this->session->set_userdata($data);

			redirect('Home');
		}
	}

	public function doctor()
	{
		$data['only_body']=true;
		$data['body_page']='doctor_sign_up';
		$this->load->view('structure', $data);
	}

	public function save_doctor()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<i class="font-icon font-icon-warning"></i>', '</div>');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[doctors.doctor_email]');

		if($this->form_validation->run() == FALSE)
		{
			$data['only_body']=true;
			$data['body_page']='doctor_sign_up';
			$this->load->view('structure', $data);

		}else{

			$email = $this->input->post('email');

			$this->LoginModel->save_doctor();

			$doctor = $this->LoginModel->get_doctor_detail($email);

			$data = array(

				'doctor_id'	=> $doctor['doctor_id'],

				'doctor_email'	=> $doctor['doctor_email'],

				'is_logged_in'	=> true,

				'type'		=> 1

				);

			$this->session->set_userdata($data);

			redirect('Home');
		}
	}
}