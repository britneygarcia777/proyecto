<?php
	class Lugares_model extends CI_Model{

		public function agregarlugar($data)
		{
			//insertamos en la tabla paquetestour la informacion de data
			$this->db->insert('lugares',$data);
		}
		public function listalugares()
		{
			$this->db->select('*');
			$this->db->from('lugares');
			return $this->db->get();
		}
		public function recuperarLugar($id)
		{
			$this->db->select('*');
			$this->db->from('lugares');
			$this->db->where('idlugares',$id);
			return $this->db->get();
		}
		public function modificarLugar($id,$data)
		{
			// 			atrib.BD
			$this->db->where('idlugares',$id);
			$this->db->update('lugares',$data);
			
		}
		public function listaguiasdes()
		{
			$this->db->select('*');
			$this->db->from('usuario');
			$this->db->where('rol','guia');
			$this->db->where('estado',0);
			return $this->db->get();
		}
		public function eliminarLugar($id)
		{
			// 			atrib.BD
			$this->db->where('idlugares',$id);
			$this->db->delete('lugares');
		}
	}
?>