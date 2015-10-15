<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Controlador_admInicio extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('usuario_model');
		$this->load->helper('url');
	}

	function index(){

		$this->load->view('Inicio/admInicio');
	}

	function gestionarFamilia(){
		$this->load->view('Inicio/admInicio');
		$this->load->view('Inicio/gestionarFamilia');
	}

	function gestionarPatrones(){
		$this->load->view('Inicio/admInicio');
		$this->load->view('Inicio/gestionarPatrones');
	}

//----------------------Funciones de Gestionar Familia------------------------------

	function verFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/verFamilia',$data);
	}

	// Carga el html al apretar el boton agregar
	function agregarFamilia(){
		$this->load->view('Inicio/admInicio');
		$this->load->view('Inicio/agregarFamilia');
	}

	// Realiza la consulta a la BD
	function guardar(){
		$_POST['nombreFamilia'];
		$_POST['descripcion'];
		$data = array(
			"nombre" => $this->input->post('nombreFamilia'),
			"descripcion" => $this->input->post('descripcion'),
			"fecha"=> date('Y/m/d h:m')
		);

		$result = $this->usuario_model->guardar($data);
		if ($result) {
			echo '<script language="javascript">alert("Exito");</script>';
			redirect('Controlador_admInicio');
		}else{
			echo '<script language="javascript">alert("Fracaso");</script>';
			
		}
		
	}
		
	// Carga el html al apretar el boton modificar	
	function modificarFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/modificarFamilia',$data);
	}

	// Realiza la consulta a la BD
	function modificar(){
		$id = $_POST['idMod'];
		$nombre = $_POST['nombreFamiliaMod'];
		$descripcion = $_POST['descripcionMod'];
		$result = $this->usuario_model->comparar($nombre,$descripcion,$id);
		if($result == 1){
			echo "son iguales";
		}else{
			echo "son distintos";
			$result2 = $this->usuario_model->modificar($nombre,$descripcion,$id);
			redirect('Controlador_admInicio');
			//echo $result2;
		}
		
	}	

	// Carga el html al apretar el boton eliminar	
	function eliminarFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/eliminarFamilia',$data);
	}

	// Realiza la consulta a la BD
	function eliminar(){
		$idEliminar = $_POST['idEliminar'];
		$nombreFamiliaEliminar = $_POST['nombreFamiliaEliminar'];
		$descripcionEliminar = $_POST['descripcionEliminar'];
		$result = $this->usuario_model->comparar($nombreFamiliaEliminar,$descripcionEliminar,$idEliminar);
		if($result == 1){
			$result2 = $this->usuario_model->eliminar($nombreFamiliaEliminar,$descripcionEliminar,$idEliminar);
			redirect('Controlador_admInicio');
		}else{
			echo "son distintos";
			
		}
		
	}

//---------------------------------Funciones de Gestionar Patrones---------------------------------

	function verPatron(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verPatron(),
			
		);

		$this->load->view('Inicio/verPatron',$data);

	}	
	function eliminarPatron(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verPatron()
			);
			$this->load->view('Inicio/eliminarPatron',$data);
	}
	function eliminar2(){
		$idEliminar = $_POST['idEliminar'];
		$nombrePatronEliminar = $_POST['nombrePatronEliminar'];
		$descripcionEliminar = $_POST['descripcionEliminar'];
		$result = $this->usuario_model->comparar($nombrePatronEliminar,$descripcionEliminar,$idEliminar);
		if($result == 1){
			$result2 = $this->usuario_model->eliminar($nombrePatronEliminar,$descripcionEliminar,$idEliminar);
			redirect('Controlador_admInicio');
		}else{
			echo "son distintos";
			
		}

}

}