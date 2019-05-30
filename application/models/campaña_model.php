<?php
 defined('BASEPATH') or exit('No direct script access allowed');

 /**
  *
  */
 class Campaña_model extends CI_Model
 {

   function __construct(argument)
   {
     // code...
     parent::__construct();
     $this->load->database();
   }
   ///////////////////////////////////////////////////////////////////////////
   function listarCampaña($resultado){
     $this->db->select('nombreCampaña, fecha, ubicacion');
     $this->db->from('campaña');
     $consulta = $this->db->get();
     $resultado = $consulta->result();
   }
   ///////////////////////////////////////////////////////////////////////////
   function cargarCampaña(){
    $data = array(
   'nombreCampaña' => 'Nombre',
   'fecha' => 'Fecha',
   'ubicacion' => 'Ubicacion');
    $this->db->insert('campaña', $data);
   }
   ///////////////////////////////////////////////////////////////////////////
   function borrarCampaña($codigo){
     $this->db->where('idCampaña', $codigo);
     $this->db->delete('campaña');
   }
   ///////////////////////////////////////////////////////////////////////////
   function modificarCampaña(){
     $data = array(
    'nombreCampaña' => 'Nombre',
    'fecha' => 'Fecha',
    'ubicacion' => 'Ubicacion');
     $this->db->update('campaña', $data);
   }
  ////////////////////////////////////////////////////////////////////////

 }




 ?>
