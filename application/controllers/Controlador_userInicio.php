<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Controlador_userInicio extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('usuario_model');
		$this->load->helper('url');
	}
	function index(){

		$this->load->view('Inicio/userInicio');
	}

	public function verFamilia(){
		$this->load->view('Inicio/userInicio');
		
		$data = array(
			'enlaces'=>$this->usuario_model->verFamilia()
		);
		$this->load->view('Inicio/verFamilia',$data);
	}
}