<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gobierno_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function create_gobierno($data){
		$this->db->insert('gobierno',
				    array('nombre' => $data['nombre'],
						  'direccion' =>$data['direccion']));
	}

	public function get_gobierno($id){
		$sql = "SELECT * FROM gobierno WHERE id_gobierno = ?";
		$query =$this->db->query($sql, array($id));
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}

	}
?>