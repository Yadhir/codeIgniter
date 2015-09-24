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

	function hola(){
		$this->load->view('Inicio/admInicio');
		$this->load->view('Inicio/gestionarPatrones');
	}
	public function verFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/verFamilia',$data);
	}

	function agregarFamilia(){
		$this->load->view('Inicio/admInicio');
		$this->load->view('Inicio/agregarFamilia');
	}

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
		
	function modificarFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/modificarFamilia',$data);
	}

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

	function eliminarFamilia(){
		$this->load->view('Inicio/admInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/eliminarFamilia',$data);
	}

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

}