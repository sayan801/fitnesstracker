<?php

class Feedback_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_feedback($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('feedback');
            return $query->result_array();
        }
        $query = $this->db->get_where('feedback', array('id' => $id));
        return $query->row_array();
    }

    public function set_feedback() {
//        echo $insert_data="INSERT INTO feedback (name,mobile,email,opinion,your_opinion) 
//            VALUES ('$_POST[fullName]','$_POST[mobileNumber]','$_POST[email]','$_POST[opinionAbout]','$_POST[your_opinion]')";
//        $query=  mysql_query($insert_data);

       $data = array(
            'name' => $this->input->post('fullName'),
           // 'mobile' => $this->input->post('mobileNumber'),
            'email' => $this->input->post('email'),
            'opinion' => $this->input->post('opinionAbout'),
            'yourOpinion' => $this->input->post('yourOpinion')
        );

       return $this->db->insert('feedback', $data);
    }
    

}

?>