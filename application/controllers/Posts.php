<?php 
class Posts extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
	}
	public function index() {
	  $data['posts'] = $this->Blog_model->get_posts();
	  $data['categories'] = $this->Blog_model->get_categories();
      $data['title'] = "Posts";
      $this->load->view('templates/header', $data);
	  $this->load->view('posts_view',$data);
	  $this->load->view('templates/aside',$data);
	  $this->load->view('templates/footer', $data);

	}

	public function view_post($id = NULL) {
	 $data['categories'] = $this->Blog_model->get_categories();
	  $data['post'] = $this->Blog_model->get_posts($id);

		$data['comments'] = $this->Blog_model->get_comments($id);
		if(empty($data['post'])){

	    }
	     $this->load->view('templates/header', $data);
	     $this->load->view('post_view',$data);
	     $this->load->view('templates/aside',$data);
	     $this->load->view('templates/footer', $data);

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
        	
        	$this->load->view('create_post_view', $data);
        }

        else {
        	$this->Blog_model->set_posts();//
        	$this->load->view('create_post_view',$data);
        }
	}

	public function get_post(){
		
	}
}

 ?>