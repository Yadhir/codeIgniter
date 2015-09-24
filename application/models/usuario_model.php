<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuario_model extends CI_Model {

	public $variable;

	public function __construct(){
		parent::__construct();
		
	}

	public function login($usuario,$password){
		
		
		$this->db->where('nombreUsuario',$usuario);
		$this->db->where('contraseña',$password);
		$rol = $this->db->select('rol');
		$q = $this->db->get('usuarios');
		if($q ->num_rows()>0){
			return true;
		}else{
			return false;

		}
	}

	public function verFamilia(){
		$query = $this->db->get('patron');
		if ($query->num_rows() > 0) {
			return $query;
		}else{
			return false;
		}
	}
	public function guardar($data){
		$this->db->insert('patron',$data);
		$num_inserts = $this->db->affected_rows();
		if($num_inserts == 0){
			return false;
		}else{
			return true;
		}

	}

	public function modificar($nombre,$descripcion,$idPatron){
		$data = array(
               'nombre' => $nombre,
               'descripcion' => $descripcion,
               'idPatron' => $idPatron,
               "fecha"=> date('Y/m/d h:m')
            );

		$this->db->where('idPatron', $idPatron);
		$this->db->update('patron', $data);
		$num_update = $this->db->affected_rows();
		if($num_update == 0){
			return 0;
		}else{
			return 1;
		}

	}
	public function comparar($nombre,$descripcion,$id){

		$this->db->where('idPatron',$id);
		$this->db->where('nombre',$nombre);
		$this->db->where('descripcion',$descripcion);
		$q = $this->db->get('patron');
		if($q ->num_rows()>0){
			
			return 1;
		}else{
			
			return 0;
		}
	}

	public function eliminar($nombreFamiliaEliminar,$descripcionEliminar,$idEliminar){

		$data = array(
               'nombre' => $nombreFamiliaEliminar,
               'descripcion' => $descripcionEliminar,
               'idPatron' => $idEliminar,
               "fecha"=> date('Y/m/d h:m')
            );

		echo $idEliminar;
		$this->db->where('idPatron', $idEliminar);
		$this->db->delete('patron');
		$num_delete = $this->db->affected_rows();
		if($num_delete == 0){
			//echo $num_delete;
			return 0;
		}else{
			//echo $num_delete;
			return 1;
		}

	}


}