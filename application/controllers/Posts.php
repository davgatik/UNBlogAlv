<?php /*Action siempre colocar en base url*/
class Posts extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('Blog_model');
	}
	public function index() {
	  $data['padding_header'] = '' ;
	  $data['active_post'] = 'active';
	  $data['active_contact'] = '';
	  $data['posts'] = $this->Blog_model->get_posts();
	  $data['recent_posts'] = $this->Blog_model->recent_posts();
	  $data['categories'] = $this->Blog_model->get_categories(); 
      $data['title'] = "Posts";
      $data['token'] = $this->token();
      $this->load->view('templates/header', $data);
	  $this->load->view('posts_view',$data);
	  $this->load->view('templates/aside',$data);
	  $this->load->view('templates/footer', $data);
	}

	public function view_post($id = NULL) {
	$data['active_post'] = 'active';
	$data['active_contact'] = '';
	$data['title'] = "Posts";
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

	public function create_post() {
		$data['padding_header'] = 'padding_header' ;
		$data['titulo'] = "Posts";
		$data['categories'] = $this->Blog_model->get_categories();
        $data['recent_posts'] = $this->Blog_model->recent_posts();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('fecha','fecha','required');
        $this->form_validation->set_rules('descripcion','descripcion','required');
        

        if ($this->form_validation->run() === FALSE)
        {
        	$data['active_post'] = '';
	        $data['active_contact'] = '';
        	$this->load->view('templates/header', $data);
        	$this->load->view('create_post_view', $data);
    		$this->load->view('templates/footer', $data);	
        }

        else {
        	$this->Blog_model->set_posts();//
        	$this->load->view('create_post_view',$data);
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