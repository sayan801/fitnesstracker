<?php

class Fitnesstraker extends CI_Controller {

    public function __construct() {
        parent::__construct();
		echo "cons";
		die();
        $this->load->model('jobseeker_model');
        $this->load->model('jobpost_model');
    }

    public function index() {
	echo "coming soon";
	die();
       
    }
	public function about_foods()
	{
	echo "foods";
	die();
	}
	
}

?>
