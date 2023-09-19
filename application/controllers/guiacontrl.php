<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guiacontrl extends CI_Controller {

	public function index()
	{
		$lista=$this->guia_model->listaguias();
		$data['guia']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menulateral');
		$this->load->view('inc/menusuperior');
		$this->load->view('guia_lista',$data);
		$this->load->view('inc/pie');
	}
	public function paqueteslist()
	{
		$lista=$this->paquete_model->listapaquetes();
		$data['paquete']=$lista;

		$this->load->view('incguia/cabecera');
		$this->load->view('incguia/menusuperior');
		$this->load->view('incguia/menulateral');
		$this->load->view('paquete_lista',$data);
		$this->load->view('incguia/pie');
	}
	public function agregar()
	{
		//mostrar un formulario (vista) para que el guia creee nuevos paquetes tours
		$this->load->view('incguia/cabecera');
		$this->load->view('incguia/menusuperior');
		$this->load->view('incguia/menulateral');
		$this->load->view('paquete_crear');
		$this->load->view('incguia/pie');
	}
	public function agregarbd()
	{
		//llega informacion de la vista guia_formulario
		//atrib. bd 			formulario
		$data['nombre']=$_POST['nombre'];
		$data['descripcion']=$_POST['descripcion'];
		$data['fechaInicioFin']=$_POST['fechaI'];
		$data['capacidad']=$_POST['capacidad'];
		$data['precio']=$_POST['precio'];
		$data['dificultad']=$_POST['dificultad'];
		$data['idguia']=3;

		//llevamos la informacion a la basedeDatos en paquete_model al metodo agregarpaquete
		$this->paquete_model->agregarpaquete($data);
		//refrescar la pagina
		
	}
	public function modificar()
	{	//segunda linea envia variable a moficar en model
		//variable 		id traida de form
		$id=$_POST['idguia'];
		$data['infoguia']=$this->guia_model->recuperarGuia($id);
		
		$this->load->view('inc/cabecera');
		$this->load->view('inc/menulateral');
		$this->load->view('inc/menusuperior');
		$this->load->view('guia_modificar',$data);
		$this->load->view('inc/pie');
	}
	public function modificarbd()
	{
		//atrib. BD 			FORM
		$id=$_POST['idguia'];

		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['email']=$_POST['correo'];
		$data['telefono']=$_POST['telefono'];
		$data['fechaNacimiento']=$_POST['fechaN'];

		$this->guia_model->modificarGuia($id,$data);
		redirect('Admincontrl/index','refresh');
	}
	public function deshabilitarbd()
	{
		$id=$_POST['idguia'];
		//atrib. BD 			
		$data['estado']=0;

		$this->guia_model->modificarGuia($id,$data);
		redirect('Admincontrl/index','refresh');
	}
	public function habilitarbd()
	{
		$id=$_POST['idguia'];
		//atrib. BD 			
		$data['estado']=1;

		$this->guia_model->modificarGuia($id,$data);
		redirect('Admincontrl/deshabilitados','refresh');
	}
	public function deshabilitados()
	{
		$lista=$this->guia_model->listaguiasdes();
		$data['guia']=$lista;

		$this->load->view('inc/cabecera');
		$this->load->view('inc/menulateral');
		$this->load->view('inc/menusuperior');
		$this->load->view('guia_deshabilitados',$data);
		$this->load->view('inc/pie');
	}
	public function eliminarbd()
	{	//segunda linea envia variable a eliminar en model
		//variable 		id traida de form
		$id=$_POST['idguia'];
		$this->guia_model->eliminarGuia($id);
		redirect('Admincontrl/deshabilitados','refresh');
	}
	
}
