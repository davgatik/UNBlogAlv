<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	
	public function index()
	{	
		switch ($this->session->userdata('perfil')) {
			case '':
				$data['token'] = $this->token();
				$data['titulo'] = 'Sign In';
				$this->load->view('login_view',$data);
				break;
			case 'administrador':
				redirect(base_url().'admin_view');
				break;
			case 'editor':
				redirect(base_url().'edit_view');
				break;	
			case 'suscriptor':
				redirect(base_url().'index.php/Posts');
				break;
			default:		
				$data['titulo'] = 'Sign In';
				$this->load->view('login_view',$data);
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
				$pass = $this->input->post('pass'); //sha1
				$check_user = $this->Login_model->login_user($user,$pass);
				if($check_user == TRUE)
				{
					$data = array(
	                'id_usuario' 	=> 		$check_user->id_usuario,
	                'perfil'		=>		$check_user->perfil,
	                'usuario' 		=> 		$check_user->usuario
            		);		
					$this->session->set_userdata($data);
					$this->index();
				}
			}
		}else{
			redirect(base_url().'index.php/login');
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
}

 ?>
