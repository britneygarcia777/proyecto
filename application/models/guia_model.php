<?php
	class Guia_model extends CI_Model{

		public function agregarguia($data)
		{
			//insertamos en la tabla usuario la informacion de data
			$this->db->insert('usuario',$data);
		}
		public function listaguias()
		{
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('rol','guia');
			$this->db->where('estado',1);
			return $this->db->get();
		}
		public function recuperarGuia($id)
		{
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('id',$id);
			return $this->db->get();
		}
		public function modificarGuia($id,$data)
		{
			// 			atrib.BD
			$this->db->where('id',$id);
			$this->db->update('usuario',$data);
		}
		public function listaguiasdes()
		{
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('rol','guia');
			$this->db->where('estado',0);
			return $this->db->get();
		}
		public function eliminarGuia($id)
		{
			// 			atrib.BD
			$this->db->where('id',$id);
			$this->db->delete('usuario');
		}
	}
?>