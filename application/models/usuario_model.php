<?php
	class Usuario_model extends CI_Model{

		public function usuarioExiste($usuario) {
		    $this->db->where('email', $usuario); // Cambia 'nombre_usuario' al campo que estás utilizando
		    $query = $this->db->get('usuario');

		    return $query->num_rows() > 0;
		}
		
	    public function validar($email,$password){
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('email', $email);
			$this->db->where('contrasenia', $password);
			return $this->db->get();
		}
	}
?>