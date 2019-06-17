<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modificarC extends CI_Controller {
	function __construct() {
 		parent::__construct();
 		$this->load->model('campana_model');
		$this->load->helper('form');
 }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html


	 */
	 public function add()
	 {

			 if(isset($_POST) && count($_POST) > 0)
			 {
					 $params = array(
			'nombreCampana' => $this->input->post('nombreCampana'),
			'fecha' => $this->input->post('fecha'),
			'ubicacion' => $this->input->post('ubicacion'),
					 );

					 $linea_id = $this->campana_model->add_linea($params);
					 redirect('modificarC');

			 }

	 }

	public function index()
	{
		//$this->load->model('campana_model');
	//	$data['listado'] = $this->campana_model->listarCampana();
		$this->load->view('modificarCampana');

	}

}
