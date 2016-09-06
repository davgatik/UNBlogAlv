<?php 
class Contacts extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->helper('');
		$this->load->library('bcrypt');
		$this->load->helper('form');
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
	}
	public function index() {
		$data['titulo'] = "Contacts";
		$this->load->view('templates/header', $data);
		$this->load->view('contact_view', $data);
		$this->load->view('templates/aside', $data);
		$this->load->view('templates/footer', $data);

	}
	public function create_contact() {
		$data['titulo'] = "Contacts";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('subject','subject','required');
        $this->form_validation->set_rules('message','message','required');

        if ($this->form_validation->run() === FALSE)
        {
        	
        	$this->load->view('contact_view', $data);
        }

        else {
        	$this->Blog_model->set_contacts();//
        	$this->load->view('contact_view',$data);
        }
	}

}



 ?>