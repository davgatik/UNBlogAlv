<?php 
class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
		$this->load->database('default');
		$this->load->library(array('session','form_validation'));
	}
	public function index(){

	}
	


	public function index_sign() {
		$data['titulo'] = "Sign Up";
		$this->load->view('sign_view', $data);
	}

	public function create_user() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['title'] = 'Sign Up';
		$this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('lastname','lastname','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('user','user','required');
        $this->form_validation->set_rules('pass','pass','required');
        $this->form_validation->set_rules('cpass','cpass','required');

        if ($this->form_validation->run() === FALSE)
        {
        	
        	$this->load->view('sign_view');
        }

        else {
        	$this->Blog_model->set_users();//
        	$this->load->view('sign_view');
        }
	}

	
}



	


 ?>