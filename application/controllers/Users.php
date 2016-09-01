<?php 
class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('bcrypt');
		$this->load->helper(array('url','form'));
		$this->load->helper('url_helper');
		$this->load->model('Blog_model');
		$this->load->database('default');
		$this->load->library(array('session','form_validation'));
	}
	public function index(){
		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$data['titulo'] = 'Sign In';
				$this->load->view('Login_view',$data);
				break;
			case 'administrador':
				redirect(base_url().'admin');
				break;
			case 'editor':
				redirect(base_url().'editor');
				break;	
			case 'suscriptor':
				redirect(base_url().'suscriptor');
				break;
			default:		
				$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('Post_view',$data);
				break;		
		}
	}




	public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('user', 'user', 'required');
            $this->form_validation->set_rules('pass', 'pass', 'required');
 
            //lanzamos mensajes de error si es que los hay
            
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$user = $this->input->post('user');
				$pass = sha1($this->input->post('pass'));
				$check_user = $this->Blog_model->login_user($user,$pass);
				if($check_user == TRUE)
				{
					$data = array(
	                'is_logued_in' 	=> 		TRUE,
	                'id_usuario' 	=> 		$check_user->id_usuario,
	                'perfil'		=>		$check_user->perfil,
	                'user' 		=> 		    $check_user->user
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'index.php/Post/');
		}
	}


	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	

	public function logout_ci()
	{
		$this->session->sess_destroy();
		$this->index();
	}
   
	public function index_sign() {
		$data['titulo'] = "Sign Up";
		$this->load->view('Sign_view', $data);
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
        	
        	$this->load->view('Sign_view');
        }

        else {
        	$this->Blog_model->set_users();//
        	$this->load->view('Sign_view');
        }
	}

	
}



	


 ?>