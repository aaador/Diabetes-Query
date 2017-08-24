<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('LoginModel');
		$patient;
	}

	public function index()
	{
		$this->session->sess_destroy();
		$data['only_body']=true;
		$data['body_page']='patient_login';
		$this->load->view('structure', $data);
	}

	public function auth()
	{
    	$email = $this->input->post('email');
    	$password = $this->input->post('password');

		$this->patient = $this->LoginModel->get_patient_detail($email);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<i class="font-icon font-icon-warning"></i>', '</div>');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');		
		$this->form_validation->set_rules('password', 'Password', 'required|callback_password_check');

		if ($this->form_validation->run() == FALSE)
        {
			$data['only_body']=true;
			$data['body_page']='patient_login';
			$this->load->view('structure', $data);
			
        } else {

        	if(password_verify($password, $this->patient['patient_password']))
        	{
        		$this->LoginModel->update_last_login($email);
        		
        		$data = array(

		    		'patient_id' => $this->patient['patient_id'],

		    		'is_logged_in' => TRUE,

	    			'patient_email' => $this->patient['patient_email'],

	    			'type'			=> '0'

	    		);

	    		$this->session->set_userdata($data);

				redirect('Home');
        	}
        }
	}

	public function email_check($email)
	{
		if($this->patient['patient_email']==$email)
		{
			return TRUE;
			
		}else{

			$this->form_validation->set_message('email_check', 'The given email is wrong!');
                        
            return FALSE;
		}
	}

	public function password_check($password)
	{

		if(password_verify($password, $this->patient['patient_password']))
		{
			return TRUE;

		} else {

			$this->form_validation->set_message('password_check', 'The given password is wrong');

			return FALSE;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('');
	}
}
