<?php

class Jobpost_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_jobpost($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('jobpost');
            return $query->result_array();
        }

        $query = $this->db->get_where('jobpost', array('id' => $id));
        return $query->row_array();
    }

    public function set_jobpost() {
        $this->load->helper('url');

        $data = array(
            'degree' => $this->input->post('degree'),
            'school' => $this->input->post('school'),
            'dateGraduated' => $this->input->post('dateGraduated'),
            'certification' => $this->input->post('certification'),
            'notes' => $this->input->post('notes'),
            'emr' => $this->input->post('emr'),
            'emrModules' => $this->input->post('emrModules'),
            'trainingLevel' => $this->input->post('trainingLevel'),
            'yearsExperience' => $this->input->post('yearsExperience'),
            'employmentType' => $this->input->post('employmentType'),
            'employment' => $this->input->post('employment'),
            'travel' => $this->input->post('travel'),
            'requiredPay' => $this->input->post('requiredPay'),
            'amount' => $this->input->post('amount'),
            'preferredTravelRegion' => $this->input->post('preferredTravelRegion'),
            
            
        );

        return $this->db->insert('jobpost', $data);
    }


}

?>
