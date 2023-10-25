<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariocontrl extends CI_Controller {

	
	public function index()
	{	
		if ($this->session->userdata('email')) {
			//usuario correctamene validado
			redirect('Usuariocontrl/panel', 'refresh');

		}else{
			$this->load->view('usuario_login');			
		}

	}

	public function agregarbd()
	{
	    // Se almacena el código encriptado del método enviaremail a password y también ejecutamos el método enviar
	    $email = $_POST['email'];
	    $password = $this->enviaremail($email);     

	    // Atributos de la base de datos desde el formulario
	    //      bd                 formulario
	    $data['nombre'] = $_POST['nombre'];
	    $data['primerApellido'] = $_POST['apellido1'];
	    $data['segundoApellido'] = $_POST['apellido2'];
	    $data['email'] = $_POST['email'];
	    $data['contrasenia'] =$password;
	    $data['telefono']=$_POST['telefono'];
		$data['fechaNacimiento']=$_POST['fechaN'];
	    $data['rol'] = 'turista';

	    $this->guia_model->agregarguia($data);

	    redirect('Admincontrl/index', 'refresh');
	}

	public function enviaremail($email)
	{
	    //genera codigo aleatorio para enviar por correo
		$codigo = str_pad(rand(1, 999999), 6, '0', STR_PAD_LEFT);
		//encriptar el codigo que remplaxzara la contraseña temporal
		$encriptado = md5($codigo);
        // Envía el correo con el código aleatorio
		$this->load->library('email');
		$this->email->from('brtineygarcia@gmail.com', 'qatina');
		$this->email->to($email);
		$this->email->subject('Código de verificación');
		$this->email->message('Su código de verificación es: ' . $codigo);
		if ($this->email->send()) {
		    return $encriptado;
		} else {
		    echo 'Error al enviar el correo electrónico: ' . $this->email->print_debugger();
		}
	}
	
	public function verificarEmail(){

		$usuario = $_POST['email'];
		if ($this->usuario_model->usuarioExiste($usuario)) {
	        // El usuario ya existe, mostrar un mensaje de error al usuario
	       echo '<script>
		            alert("Ese correo ya esta registrado.");
		        </script>';
		        $this->load->view('usuario_login');
	    } else {
	        // El usuario no existe, continuar con el registro
	        $this->agregarbd();
	    }
	}
	public function validarlogin() {
        // Obtiene los datos del formulario
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $consulta=$this->usuario_model->validar($email,$password);

        if ($consulta->num_rows() > 0) {

        	foreach ($consulta->result() as $row) {
        		$this->session->set_userdata('id',$row->id);
        		$this->session->set_userdata('ap1',$row->primerApellido);
        		$this->session->set_userdata('ap2',$row->segundoApellido);
        		$this->session->set_userdata('email',$row->email);
        		$this->session->set_userdata('rol',$row->rol);
        		redirect('Usuariocontrl/panel', 'refresh');
        	}
        }else{
        	redirect('Usuariocontrl/index', 'refresh');
        }
    }
    public function panel()
	{	
		if ($this->session->userdata('email')) {
			//usuario correctamene validado
			redirect('Admincontrl/index', 'refresh');

		}else{
			redirect('Usuariocontrl/index', 'refresh');			
		}
	}
	public function cerrarsession(){
		$this->session->sess_destroy();
		redirect('Usuariocontrl/index', 'refresh');
	}
}

