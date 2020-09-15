<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("testimony_model", "obj_testimony");
        $this->load->model("marcas_model", "obj_marcas");
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
        //OBTENER TODOS LOS TESTIMONIOS
        $params = array(
            "select" => "testimony.testimony_id,
                                    testimony.name,
                                    testimony.description,
                                    testimony.date,
                                    testimony.img,
                                    testimony.web,
                                    testimony.active",
            "where" => "testimony.active = 1",
            "order" => "testimony_id DESC"
        );
        //OBTENER TODOS LOS TESTIMONIOS
        $data['obj_testimony'] = $this->obj_testimony->search($params);
        //OBTENER LAS MARCAS
        $params = array(
            "select" => "marcas.marca_id,
                                    marcas.name,
                                    marcas.img",
            "where" => "marcas.active = 1",
            "order" => "marca_id DESC"
        );
        //OBTENER TODOS LOS TESTIMONIOS
        $data['obj_marcas'] = $this->obj_marcas->search($params);
        //OBTENER LOS DISEÑOS
        $params = array(
            "select" => "diseños.diseño_id,
                                    diseños.name,
                                    diseños.img,
                                    diseños.img_2",
            "where" => "diseños.active = 1",
            "order" => "diseño_id DESC"
        );
        //OBTENER TODOS LOS TESTIMONIOS
        $data['obj_diseños'] = $this->obj_diseños->search($params);
        //OBTENER LOS portafolio
        $params = array(
            "select" => "portafolio.portafolio_id,
                                                portafolio.name,
                                                portafolio.slug,
                                                portafolio.img1,
                                                portafolio.date,
                                                portafolio.status,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, portafolio.category_id = category.category_id'),
            "limit" => "9",
            "order" => "portafolio.portafolio_id DESC",
        );
        $data['obj_portafolio'] = $this->obj_portafolio->search($params);
        //ENVIAR DATA A VISTA
        $this->load->view('home', $data);
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
