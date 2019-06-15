<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';


class C_Conexion extends REST_Controller {

    // Construct
    public function __construct()
    {
        parent::__construct();
    }

    public function pedirAdoptados_get()
    {
        $data['adoptados'] = json_decode(
            file_get_contents('http://192.168.1.41/rescatistaAnimales/index.php/rescatista_REST/animales/2')
        );
        echo '<pre>';
        echo print_r($data['adoptados']);
        echo '</pre>';

    }
    public function pedirRescatados_get()
    {
        $data['adoptados'] = json_decode(
            file_get_contents('http://192.168.1.41/rescatistaAnimales/index.php/rescatista_REST/animales/1')
        );
        echo '<pre>';
        echo print_r($data['adoptados']);
        echo '</pre>';
    }

    public function verRescatistaSinAprobar_get(){

      $data['rescatistas'] = json_decode(
          file_get_contents('http://192.168.1.41/rescatistaAnimales/index.php/rescatista_REST/rescatistas/1')
      );
      echo '<pre>';
      echo print_r($data['rescatistas']);
      echo '</pre>';

    }

    public function contestarSolicitud_get(){
    $respuesta = curl_init();
    $dniRescatista = 39443523;
    $estado = 0;
    //estado = 0 dado de bajo
    //1 en espera de autorizacion
    //2 autorizado
    
    curl_setopt($respuesta,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($respuesta, CURLOPT_URL, "http://192.168.1.41/rescatistaAnimales/index.php/rescatista_REST/rescatista");
    curl_setopt($respuesta, CURLOPT_POST, 1);
    curl_setopt($respuesta, CURLOPT_POSTFIELDS, "dni=".$dniRescatista."&estado=".$estado);
    curl_exec($respuesta);
    if (curl_error($respuesta)) {
      $response = curl_error($respuesta);
    }else{
      $response = "";
    }
    curl_close($respuesta);
    echo $response;
    }

}

?>
