<?php 
class Posts extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this->load->helper('');
		$this->load->helper('form');
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
	}
	public function index() {
	  $data['posts'] = $this->Blog_model->get_posts();
      $data['title'] = "Posts";
      //$this->load->view('templates/header', $data);
	  $this->load->view('Posts_view',$data);
	  //$this->load->view('templates/footer');
	}

	public function view_post($id = NULL) {
	  $data['post'] = $this->Blog_model->get_posts($id);

		$data['comments'] = $this->Blog_model->get_comments($id);
		if(empty($data['post'])){
	}

		

		//$data['title'] = $data['publication']['titulo'];


		

		// $this->load->view('templates/header', $data);
	     $this->load->view('Post_view',$data);
	    // $this->load->view('templates/footer');
	}



	public function create_post(){

		$data['titulo'] = "Posts";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('fecha','fecha','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');

        if ($this->form_validation->run() === FALSE)
        {
        	
        	$this->load->view('Create_Post_view', $data);
        }

        else {
        	$this->Blog_model->set_posts();//
        	$this->load->view('Create_Post_view',$data);
        }
	}

	public function get_post(){}
}

 ?>