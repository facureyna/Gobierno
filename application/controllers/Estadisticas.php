<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {

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
	public function index()
	{
		$data['adoptados'] = json_decode(file_get_contents('http://192.168.1.43/rescatistaAnimales/index.php/Rescatista_REST/estadistica')); 
		$data['rescatistas'] = json_encode(json_decode(file_get_contents('http://192.168.1.43/rescatistaAnimales/index.php/Rescatista_REST/rescates')));
		$this->load->view('header');
		$this->load->view('estadisticas', $data);
		$this->load->view('footer');


	}
}
