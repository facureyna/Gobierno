<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class campanas_controller extends CI_Controller {
	function __construct() {
 		parent::__construct();
 		$this->load->model('campana_model');
		$this->load->helper('form');
		$this->load->helper('url');
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
	 public function cargarCampana()
	{
				 $this->load->view('cargarCampana');
	}

	public function rescatistas(){

		$response = json_decode(
				 file_get_contents('http://192.168.1.43/rescatistaAnimales/index.php/rescatista_REST/rescatistas/1')
		 );

		$data['rescatistas'] = $response->listaRescatistas;
	//	 echo '<pre>';
	//	 echo print_r($data['rescatistas']);
	//	 echo '</pre>';
		 $this->load->view('rescatistas',$data);
		//'c_conexion/verRescatistaSinAprobar_get'
	}


	    public function contestarSolicitud(){

		 	redirect('c_conexion/contestarSolicitud/');

			}


	 public function add()
	 {
		//	 if(count($_POST) > 0)
			// {
					 $params = array(
			'nombreCampana' => $this->input->post('nombreCampana'),
			'fecha' => $this->input->post('fecha'),
			'ubicacion' => $this->input->post('ubicacion'),
					 );
					 $linea_id = $this->campana_model->add_linea($params);
					 redirect('campanas_controller');
	//		 }
	 }

	 public function edit($id_campana)
	 {
			 // check if the linea exists before trying to edit it
			 $data['linea'] = $this->campana_model->get_linea($id_campana);

			 if(isset($data['linea']['id_campana']))
			 {
					 if(count($_POST) > 0)
					 {
						 $params = array(
				'nombreCampana' => $this->input->post('nombreCampana'),
				'fecha' => $this->input->post('fecha'),
				'ubicacion' => $this->input->post('ubicacion'),
						 );

							 $this->campana_model->update_linea($id_campana,$params);
							 redirect('campanas_controller');
					 }
					 else
					 {
							 $data['_view'] = 'campanas_controller/edit';
							 $this->load->view('editarCampana',$data);
					 }
			 }
	 }

	 /*
		* Deleting linea
		*/
	 public function remove($id_campana)
	 {
			 $linea = $this->campana_model->get_linea($id_campana);

			 // check if the linea exists before trying to delete it
			 if(isset($linea['id_campana']))
			 {
					 $this->campana_model->delete_campana($id_campana);
					 redirect('campanas_controller');
			 }
			 else
					 echo ('Esta campaña no existe.');
			 $this->campana_model->delete_campana($id_campana);
	 }


	 public function index()
	 {
		 $this->load->model('campana_model');
		 $data['listado'] = $this->campana_model->listarCampana();
		 $this->load->view('campana',$data);

	 }

}
