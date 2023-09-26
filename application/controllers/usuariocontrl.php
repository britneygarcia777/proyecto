<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariocontrl extends CI_Controller {

	public function index()
	{	//la primera pagina a mostrar	
		$this->load->view('usuario_pagprincipal');
	}
	public function usuarioemail()
	{	//registro del usuario Turista con envio de codigo por correo electrononico
		$this->load->view('usuario_email');
	}
	public function agregarbd()
	{
    // Se almacena el código encriptado del método enviaremail a password y también ejecutamos el método enviar
    $email = $_POST['email'];
    $password = $this->enviaremail($email);     

    // La validación fue exitosa, procesa los datos aquí
    // Llega información de la vista usuario_email

    // Atributos de la base de datos desde el formulario
    //      bd                 formulario
    $data['nombre'] = $_POST['nombre'];
    $data['primerApellido'] = $_POST['apellido1'];
    $data['segundoApellido'] = $_POST['apellido2'];
    $data['email'] = $_POST['email'];// Usamos la variable $email almacenada anteriormente
    $data['contrasenia'] =$password;
    $data['rol'] = 'turista';

    // Llevamos la información a la base de datos en guia_model al método agregarguia
    $this->guia_model->agregarguia($data);

    // Refrescar la página
    redirect('Admincontrl/index', 'refresh');
	}

	public function validacion()
	{   
	    // Establece las reglas de validación para el campo nombre
	    $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha|max_length[45]');
	    $this->form_validation->set_rules('apellido1', 'Apellido', 'trim|required|alpha|max_length[45]');
	    $this->form_validation->set_rules('apellido2', 'Segundo Apellido', 'trim|alpha|max_length[45]');
	    $this->form_validation->set_rules('email', 'Correo Electrónico', 'trim|required|valid_email');

	    if ($this->form_validation->run() === FALSE)
	    {
	        // La validación falló, muestra el formulario nuevamente con los errores
	        $this->load->view('usuario_email');
	    }
	    else
	    {
	        $this->agregarbd(); 
	    }     
	}

	public function enviaremail($email)
	{
	    // Genera un código aleatorio para enviar por correo
	    $codigo = str_pad(rand(1, 999999), 6, '0', STR_PAD_LEFT);
	    
	    // Encripta el código que reemplazará la contraseña temporal
	    $encriptado = password_hash($codigo, PASSWORD_DEFAULT);

	    
	    $this->load->library('email');
	    $this->email->initialize($config);
	    
	    $this->email->from('garcia.britney.946@gmail.com', 'qatina'); 
	    $this->email->to($email);
	    $this->email->subject('Código de verificación');
	    $this->email->message('Su código de verificación es: ' . $codigo);
	    
	    // Envía el correo electrónico
	    if ($this->email->send()) {
	        return $encriptado;
	    } else {
	        echo 'Error al enviar el correo electrónico: ' . $this->email->print_debugger();
	    }
	}

}

