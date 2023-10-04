<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lugarescontrl extends CI_Controller {

	public function index()
	{
		$lista=$this->lugares_model->listalugares();
		$data['lugar']=$lista;

		$this->load->view('incguia/cabecera');
		$this->load->view('incguia/menulateral');
		$this->load->view('incguia/menusuperior');
		$this->load->view('lugar_lista',$data);
		$this->load->view('incguia/pie');
	}
	public function agregar()
	{
		//mostrar un formulario (vista) para que el administrador agregue nuevos guias
		$this->load->view('incguia/cabecera');
		$this->load->view('incguia/menusuperior');
		$this->load->view('incguia/menulateral');
		$this->load->view('lugares_crear');
		$this->load->view('incguia/pie');
	}
	public function agregarbd()
	{
		//llega informacion de la vista guia_formulario
		//atrib. bd 			formulario
		$data['nombre']=$_POST['nombre'];
		$data['latitud']=$_POST['latitud'];
		$data['longitud']=$_POST['longitud'];	
		$data['municipio']=$_POST['municipio'];	

		//llevamos la informacion a la basedeDatos en guia_model al metodo agrgarguia
		$this->lugares_model->agregarlugar($data);
		//refrescar la pagina
		redirect('Lugarescontrl/agregar','refresh');
	}
	public function modificar()
	{	//segunda linea envia variable a moficar en model
		//variable 		id traida de form
		$id=$_POST['idlugar'];
		$data['lugares']=$this->lugares_model->recuperarLugar($id);
		
		$this->load->view('incguia/cabecera');
		$this->load->view('incguia/menulateral');
		$this->load->view('incguia/menusuperior');
		$this->load->view('lugares_modificar',$data);
		$this->load->view('incguia/pie');
	}
	public function modificarbd()
	{
		//atrib. BD 			FORM
		$id=$_POST['idlugar'];

		$data['nombre']=$_POST['nombre'];
		$data['latitud']=$_POST['latitud'];
		$data['longitud']=$_POST['longitud'];
		$data['municipio']=$_POST['municipio'];

		$this->lugares_model->modificarLugar($id,$data);
		redirect('Lugarescontrl/index','refresh');
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
		$id=$_POST['idlugar'];
		$this->lugares_model->eliminarLugar($id);
		redirect('Lugarescontrl/index','refresh');
	}
	
}
