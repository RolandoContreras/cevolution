<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("category_model", "obj_category");
        $this->load->model("diseno_model", "obj_diseños");
        $this->load->model("portafolio_model", "obj_portafolio");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        //get category
        $data['obj_category'] = $this->get_category();
        //ENVIAR DATA A VISTA
        $this->load->view('servicios', $data);
    }
    
    public function get_category() {
        $params = array(
            "select" => "slug,
                        name",
            "where" => "active = 1"
        );
        //OBTENER TODOS LOS TESTIMONIOS
        $obj_category = $this->obj_category->search($params);
        return $obj_category;
    }
}
