<?php
if(!defined('BASEPATH')) 
    exit('No direct script access allowed');

class GeneralModel extends CI_Model {
				
    public function __construct()
    {
        parent::__construct();
		$this->data=array();
    }

    public function get_my_info()
    {
        $type = $this->session->userdata('type');
        $patient_id = $this->session->userdata('patient_id');
        $doctor_id = $this->session->userdata('doctor_id');

        $query;

        if($type==0)
        {
            $query=$this->db->query('select * from patients where patient_id = '.$patient_id);

        }else{

            $query=$this->db->query('select * from doctors where doctor_id = '.$doctor_id);
        }

        return $query->row_array();
    }

    public function save_value($value)
    {
        $patient_id = $this->session->userdata('patient_id');
        $this->db->query('INSERT INTO area_survey (id, patient_id, d_value) VALUES (NULL, '.$patient_id.', '.$value.')');
    }

    public function get_all_doctors()
    {
        $query = $this->db->query('Select doctor_name, doctor_degree, doctor_email, doctor_phone, doctor_type from doctors');

        return $query->result_array();
    }

    public function get_all_patients()
    {
        $query = $this->db->query('Select * from patients');

        return $query->result_array();
    }

    public function get_patient_regular_info($patient_id)
    {
        $query = $this->db->query('Select * from regular_check where patient_id = '.$patient_id);
        
        return $query->result_array();
    }

    public function save_info()
    {
        $patient_id = $this->session->userdata('patient_id');
        $check_date = strtotime($this->input->post('check_date'));
        $sugar_level = $this->input->post('sugar_level');
        $calorie_burned = $this->input->post('calorie_burned');

        $this->db->query('INSERT INTO regular_check (r_id, patient_id, check_date, sugar_level, calorie_burned) VALUES (NULL, '.$patient_id.', '.$check_date.', '.$sugar_level.', '.$calorie_burned.')');
    }

    public function save_tip($patient_id)
    {
        $tip = $this->input->post('tip');
        $tip_type = $this->input->post('tip_type');
        $doctor_id = $this->session->userdata('doctor_id');

        $this->db->query('INSERT INTO tips (tip_id, doctor_id, patient_id, tip) VALUES (NULL, '.$doctor_id.', '.$patient_id.', "'.$tip.'")');
    }

    public function get_patient_detail($email)
    {
        $query = $this->db->query('select * from patients where patient_email = '.$patient_email);
    	
        return $query->row_array();
    }

    public function get_all_tips()
    {
        $patient_id = $this->session->userdata('patient_id');
        $query = $this->db->query('select * from tips where patient_id = '.$patient_id);
        
        return $query->result_array();
    }
}