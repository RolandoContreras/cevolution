<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("testimony_model","obj_testimony");
        $this->load->model("marcas_model","obj_marcas");
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
	public function index()
	{
            //OBTENER TODOS LOS TESTIMONIOS
           $params = array(
                        "select" =>"testimony.testimony_id,
                                    testimony.name,
                                    testimony.description,
                                    testimony.date,
                                    testimony.img,
                                    testimony.active",
                        "where" =>"testimony.active = 1",
                        "order" =>"testimony_id DESC"
                        );
           //OBTENER TODOS LOS TESTIMONIOS
           $data['obj_testimony'] = $this->obj_testimony->search($params);
           //OBTENER LAS MARCAS
           $params = array(
                        "select" =>"marcas.marca_id,
                                    marcas.name,
                                    marcas.img",
                        "where" =>"marcas.active = 1",
                        "order" =>"marca_id DESC"
                        );
           //OBTENER TODOS LOS TESTIMONIOS
           $data['obj_marcas'] = $this->obj_marcas->search($params);
           
           //ENVIAR DATA A VISTA
           $this->load->view('home' ,$data);
	}
}
