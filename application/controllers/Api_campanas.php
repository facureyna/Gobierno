<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Api_campanas extends REST_Controller {

     function __construct() {
        parent::__construct();
        $this->load->model('campana_model');
        //$this->load->helper('url');
    }
    public function index_get(){
      $data = $this->campana_model->listarCampana();
      $this->response($data);
      $this->response($this->campana_model->listarCampana());
    }
}
