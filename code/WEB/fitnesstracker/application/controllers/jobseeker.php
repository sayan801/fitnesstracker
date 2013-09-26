<?php

class Jobseeker extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jobseeker_model');
        $this->load->model('jobpost_model');
    }

    public function index() {
       
        $data['jobseeker'] = $this->jobseeker_model->get_jobseeker();
        
        $data['title'] = 'Jobseeker archive';

        $this->load->view('templates/header', $data);
        $this->load->view('jobseeker/index', $data);
        $this->load->view('templates/footer');
    }
	public function login_view()
	{
	
		$this->load->view('templates/header');
        $this->load->view('jobseeker/login_view');
        $this->load->view('templates/footer');
	}
        
        public function activity_view()
	{
	
		$this->load->view('templates/header');
        $this->load->view('pages/activity');
        $this->load->view('templates/footer');
	}

    public function view($id) {
        

        $data['jobseeker_item'] = $this->jobseeker_model->get_jobseeker($id);
        $data['jobpost'] = $this->jobpost_model->get_jobpost();
        if (empty($data['jobseeker_item'])) {
            show_404();
        }

        $data['title'] = $data['jobseeker_item']['lastName'];

        $this->load->view('templates/header', $data);
        $this->load->view('jobseeker/view', $data);
        $this->load->view('templates/footer');
    }

   public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a jobseeker item';

        $this->form_validation->set_rules('lastName', 'lastName', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jobseeker/create');
            $this->load->view('templates/footer');
        } else {
            $this->jobseeker_model->set_jobseeker();
            $this->load->view('templates/header');
            $this->load->view('jobseeker/success');
            $this->load->view('templates/footer');
        }
    }
	public function about_foods()
	{
	echo "foods";
	die();
	}
	public function about()
	{
		$this->load->view('templates/header');
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
	
	}
    
   

}

?>
