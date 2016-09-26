<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user($user,$pass)
	{
		$this->db->where('usuario',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get('usuarios');
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			$this->session->set_flashdata('usuario_incorrecto','<p class="message_error"><img src='.base_url().'/assets/images/error.png>The username and / or password are incorrect</p>');
			redirect(base_url().'index.php/login','refresh');
		}
	}
}