<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Controlador_Inicio extends CI_Controller {

	function __construct(){
		parent:: __construct();
		/*
		$this->load->helper('mihelper');
		$this->load->helper('form');
		*/
	}

	
	function index(){
		$this->load->view('Inicio/login');
		$this->load->helper('url');
		if (isset($_POST['password'])) {
			$this->load->model('usuario_model');
			$usuario = $_POST['usuario'];
			$contraseña = $_POST['password'];
			//echo $contraseña;

			if($usuario == 'admin'){
				if ($this->usuario_model->login($usuario,$contraseña)) {
				redirect('Controlador_admInicio');
				}else{
				echo " NO paso";	
				}
			}

			if($usuario == 'omar'){
				if ($this->usuario_model->login($usuario,$contraseña)) {
				redirect('Controlador_userInicio');
				}else{
				echo " NO paso";	
				}
			}
		}
		

		/*
		$this->load->library('menu',array('Inicio','Contacto'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('Inicio/inicio',$data);
		*/

	}


	function holaMundo (){
		$this->load->view('Inicio/inicio');		
	}

	function nuevo (){
		$this->load->view('Inicio/formulario');		
	}

	function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post ('nombre'),
			'descripcion' => $this->imput->post('descripcion')
		);


	}
}

?>