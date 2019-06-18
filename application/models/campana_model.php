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
  function add_linea($params)
  {
      $this->db->insert('campana',$params);
      return $this->db->insert_id();
  }
  ////////////////////////////////////////////////////////////////////////
  function get_linea($id_campana)
  {
      return $this->db->get_where('campana',array('id_campana'=>$id_campana))->row_array();
  }
  ////////////////////////////////////////////////////////////////////////
  function update_linea($id_campana,$params)
  {
      $this->db->where('id_campana',$id_campana);
      return $this->db->update('campana',$params);
  }
  ///////////////////////////////////////////////////////////////////////////
  function delete_campana($id_campana)
  {
      return $this->db->delete('campana',array('id_campana'=>$id_campana));
  }




 }




 ?>
