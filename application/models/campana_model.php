<?php
 defined('BASEPATH') or exit('No direct script access allowed');

 /**
  *
  */
 class Campana_model extends CI_Model
 {

   function __construct()
   {
     // code...
     parent::__construct();
     $this->load->database();
   }
   ///////////////////////////////////////////////////////////////////////////
   public function listarCampana(){
     $this->db->select('id_campana,nombreCampana, fecha, ubicacion');
     $this->db->from('campana');
     $consulta = $this->db->get();
     return $consulta->result();
     //return $this->db->get_where('campana');
   }

  ////////////////////////////////////////////////////////////////////////

 }




 ?>
