<?php
	class Paquete_model extends CI_Model{

		public function agregarpaquete($data)
		{
			//insertamos en la tabla paquetestour la informacion de data
			$this->db->insert('paquetestour',$data);
		}
		public function listapaquetes()
		{
			$this->db->select('*');
			$this->db->from('paquetestour');
			$this->db->join('usuario','usuario.id=paquetestour.idguia');
			$this->db->where('usuario.id',3);
			return $this->db->get();
		}
		public function agregarubicacion($data)
		{
			//insertamos en la tabla paquetestour la informacion de data
			$this->db->insert('ubicaciones',$data);
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