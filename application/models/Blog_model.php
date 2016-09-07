<?php 

class Blog_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

   //-- users -- //
	public function get_users($slug = FALSE) 
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('usuarios');
			return $query->result_array();
		}

		$query = $this->db->get_where('usuarios', array('slug' => $slug));
		return $query->row_array();

	}

	public function set_users()
	{
		$this->load->helper('url');
		$data = array(
			'nombre' => $this->input->post('name'),
			'apellido' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'usuario' => $this->input->post('user'),
			'password' => $this->input->post('pass')
			);
		return $this->db->insert('usuarios', $data);
	}

  //--contacts--//

		public function set_contacts()
	{
		$this->load->helper('url');

		$data = array(
			'email' => $this->input->post('email'),
			'tema' => $this->input->post('subject'),
			'mensaje' => $this->input->post('message')
			);
		return $this->db->insert('contactos', $data);
	}

 //--posts--//
	public function get_posts($id = FALSE) {
		if ($id===FALSE) {
			$query = $this->db->select('*');
			$query = $this->db->from('publicaciones');

			$query = $this->db->get();
			/*var_dump($query->num_rows());
			exit;*/
        if($query->num_rows() > 0 )
        {
        	
            //return $query->result();
            return $query->result_array();
        }

		}
		else {
			$query = $this->db->select('*');
			$query = $this->db->from('publicaciones');
			$query = $this->db->where('id_publicacion', $id);
            $query = $this->db->get();
			return $query->row_array();
		}

	}

   public function recent_posts(){
   	 $query = $this->db->select("*");
   	 $query = $this->db->from('publicaciones');
   	 $query = $this->db->order_by('fecha',"desc");
   	 $query = $this->db->limit(5,0);
   	 $query = $this->db->get();
   	 return $query->result_array();
   }

	public function set_posts() {

		$this->load->helper('url');

		$data = array(
			'titulo' => $this->input->post('titulo'),
			'fecha' => $this->input->post('fecha'),
			'descripcion' => $this->input->post('descripcion')
			);
		return $this->db->insert('publicaciones', $data);

	}

//--comments--//
	public function get_comments($id = FALSE)
	{
		$query = $this->db->select('*');
        $query = $this->db->from('usuarios  u');
        $query = $this->db->join('publicaciones p' , 'p.id_usuario = u.id_usuario');
        $query = $this->db->join('comentarios c','c.id_publicacion = p.id_publicacion');
        $query = $this->db->where('p.id_publicacion' , $id);
		$query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result_array();
        }
	}


	public function get_categories()
	{
		$query = $this->db->select('*');
		$query = $this->db->from('categorias');
		$query = $this->db->get();
		//var_dump($query->result_array());
		//exit;
		return $query->result_array();

	}

	


}


 ?>