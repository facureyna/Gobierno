<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Linea_controller extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
      //  $this->load->helper('url');
      //  $this->load->model('linea_model');
      //  $this->load->model('trabajo_model');
      //  $this->load->model('consigna_model');
			$this->load->model('campana_model');
	}


    /*
     * Adding a new linea
     */
    public function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'nombreCampana' => $this->input->post('nombreCampana'),
				'fecha' => $this->input->post('fecha'),
				'ubicación' => $this->input->post('ubicación'),
            );

            $linea_id = $this->campana_model->add_linea($params);

        }

    }

    /*
     * Editing a linea
     */
    public function edit($idLinea)
    {
        // check if the linea exists before trying to edit it
        $data['linea'] = $this->linea_model->get_linea($idLinea);

        if(isset($data['linea']['idLinea']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'nombreLinea' => $this->input->post('nombreLinea'),
					'abreviLinea' => $this->input->post('abreviLinea'),
					'obsLinea' => $this->input->post('obsLinea'),
                );

                $this->linea_model->update_linea($idLinea,$params);
                redirect('linea_controller');
            }
            else
            {
                $data['_view'] = 'linea/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('La linea no existe.');
    }

    /*
     * Deleting linea
     */
    public function remove($idLinea)
    {
        $linea = $this->linea_model->get_linea($idLinea);

        // check if the linea exists before trying to delete it
        if(isset($linea['idLinea']))
        {
            $this->linea_model->delete_linea($idLinea);
            redirect('linea_controller');
        }
        else
            echo ('Esta linea no existe.');
        $this->linea_model->delete_linea($idLinea);
    }

}
