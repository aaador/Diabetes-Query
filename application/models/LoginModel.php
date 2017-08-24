<?php
if(!defined('BASEPATH')) 
    exit('No direct script access allowed');

class LoginModel extends CI_Model {
				
    public function __construct()
    {
        parent::__construct();
		$this->data=array();
    }

    public function save_doctor()
    {
        $doctor_name = $this->input->post('full_name');

        $doctor_email = $this->input->post('email');

        $doctor_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $doctor_phone = $this->input->post('phone');

        $doctor_degree = $this->input->post('degree');

        $doctor_type = $this->input->post('type');

        $reg_time = time();

        $last_login = time();

        $this->db->query('INSERT INTO doctors (doctor_id, doctor_name, doctor_email, doctor_password, doctor_phone, doctor_degree, doctor_type, reg_time, last_login) VALUES (NULL, "'.$doctor_name.'", "'.$doctor_email.'", "'.$doctor_password.'", '.$doctor_phone.', "'.$doctor_degree.'", "'.$doctor_type.'", '.$reg_time.', '.$last_login.')');
    }

    public function save_patient()
    {
        $patient_name = $this->input->post('full_name');

        $patient_email = $this->input->post('email');

        $patient_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $patient_phone = $this->input->post('phone');

        $patient_sex = $this->input->post('sex');

        $patient_age = $this->input->post('age');

        $d_identified_date = strtotime($this->input->post('d_identified_date'));

        $d_level = $this->input->post('d_level');

        $reg_time =time();

        $last_login = time();

        $city = $this->input->post('city');

        $blood = $this->input->post('blood');

        $this->db->query('INSERT INTO patients (patient_id, patient_name, patient_email, patient_password, patient_phone, patient_sex, patient_age, d_identified_date, d_level, reg_time, last_login, city, blood) VALUES (NULL, "'.$patient_name.'", "'.$patient_email.'", "'.$patient_password.'", '.$patient_phone.', "'.$patient_sex.'", "'.$patient_age.'", '.$d_identified_date.', "'.$d_level.'", '.$reg_time.', '.$last_login.', "'.$city.'", "'.$blood.'")');
    }

    public function get_patient_detail($email)
    {
        $query = $this->db->query('select * from patients where patient_email = "'.$email.'"');

    	return $query->row_array();
    }

    public function get_doctor_detail($email)
    {
        $query = $this->db->query('select * from doctors where doctor_email = "'.$email.'"');

        return $query->row_array();
    }

    public function update_last_login($email)
    {
        $last_login = time();

        $this->db->query('UPDATE patients SET last_login = '.$last_login.' WHERE patient_email = "'.$email.'"');
    }

}