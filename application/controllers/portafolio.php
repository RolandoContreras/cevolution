<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portafolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("category_model", "obj_category");
        $this->load->model("portafolio_model", "obj_portafolio");
        $this->load->model("diseno_model", "obj_diseños");
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
        //get diseños
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
        //OBTENER TODOS EL PORTAFOLIO
         $params = array(
            "select" => "portafolio.portafolio_id,
                                                portafolio.name,
                                                portafolio.slug,
                                                portafolio.description,
                                                portafolio.img1,
                                                portafolio.date,
                                                portafolio.status,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, portafolio.category_id = category.category_id'),
            "where" => "portafolio.status = 1",
        );
        /// PAGINADO
        $config = array();
        $config["base_url"] = site_url("portafolio");
        $config["total_rows"] = $this->obj_portafolio->total_records($params);
        $config["per_page"] = 12;
        $config["num_links"] = 1;
        $config["uri_segment"] = 2;

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span aria-current="page" class="page-numbers current">';
        $config['cur_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['obj_pagination'] = $this->pagination->create_links();
        /// DATA
        $data['obj_portafolio'] = $this->obj_portafolio->search_data($params, $config["per_page"], $this->uri->segment(2));
        //ENVIAR DATA A VISTA
        $this->load->view('portafolio', $data);
    }

    public function detail($category_slug = null) {
        //get category
        $data['obj_category'] = $this->get_category();
        $url = uri_string();
        $nav = explode("/", $url);
        $slug = $nav[2];
        //OBTENER TODOS LOS TESTIMONIOS
        $params = array(
            "select" => "portafolio.portafolio_id,
                                                portafolio.name,
                                                portafolio.description,
                                                portafolio.img1,
                                                portafolio.img2,
                                                portafolio.img3,
                                                portafolio.img4,
                                                portafolio.img5,
                                                portafolio.img6,
                                                portafolio.date,
                                                portafolio.status,
                                                category.name as category_name,
                                                category.slug as category_slug",
            "join" => array('category, portafolio.category_id = category.category_id'),
            "where" => "category.slug = '$category_slug' and portafolio.slug = '$slug'",
        );
        $data['obj_portafolio'] = $this->obj_portafolio->get_search_row($params);
        //ENVIAR DATA A VISTA
        $this->load->view('portafolio_detail', $data);
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
