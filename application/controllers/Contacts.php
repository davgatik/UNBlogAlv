<?php 
class Contacts extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('bcrypt');
		$this->load->helper('form');
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
	}
	public function index() {
		$data['padding_header'] = 'padding_header' ;
		$data['categories'] = $this->Blog_model->get_categories();
		$data['title'] = "Contacts";
		$data['active_contact'] = 'active';
		$data['active_post'] = '';
		$data['token'] = $this->token();
		$this->load->view('templates/header', $data);
		$this->load->view('contact_view', $data);
		$this->load->view('templates/footer', $data);

	}
	public function create_contact() {
		$data['categories'] = $this->Blog_model->get_categories();
		$data['titulo'] = "Contacts";
		$this->load->helper('form');
		$data['active_contact'] = 'active';
		$data['active_post'] = '';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'required|trim|max_length[150]|valid_email');
        $this->form_validation->set_rules('subject','subject','required|trim|min_length[5]|max_length[150]');
        $this->form_validation->set_rules('message','message','required|trim|min_length[50]|max_length[150]');

        if ($this->form_validation->run() === FALSE)
        {
        	$this->load->view('templates/header', $data);
        	$this->load->view('contact_view', $data);
        	$this->load->view('templates/footer', $data);
        }

        else {
        	$this->Blog_model->set_contacts();//
        	$this->load->view('contact_view',$data);
        }
	}

	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}

}

 ?>