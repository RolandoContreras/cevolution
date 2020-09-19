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
    
    public function terminos() {
        $this->load->view("terminos");
    }
    
    public function sitemap() {
        //obtener categorias
        $params_category = array(
            "select" => "category_id,
                                    slug,
                                    date,
                                    name",
            "where" => "active = 1",
        );
        $obj_category = $this->obj_category->search($params_category);
        //obtener portafolio
         $params = array(
            "select" => "portafolio.portafolio_id,
                                                portafolio.name,
                                                portafolio.slug,
                                                portafolio.description,
                                                portafolio.date,
                                                portafolio.status,
                                                category.slug as category_slug",
            "join" => array('category, portafolio.category_id = category.category_id'),
            "where" => "portafolio.status = 1",
        );
        $obj_portafolio = $this->obj_portafolio->search($params);
        //crear código
        $codigo = '<?xml version="1.0" encoding="UTF-8"?>
      <urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
        foreach ($obj_category as $value) {
                $explode_data = explode(" ", $value->date);
                $date = "$explode_data[0]" . 'T' . $explode_data[1] . "+00:00";
                $codigo .='<url>
                <loc>' . site_url() . "portafolio/" . $value->slug;
                $codigo .='</loc>
                <lastmod>' . $date . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
                </url>';
        }
        foreach ($obj_portafolio as $value) {
            $explode_data = explode(" ", $value->date);
            $date = "$explode_data[0]" . 'T' . $explode_data[1] . "+00:00";
            $codigo .='<url>
                <loc>' . site_url() . "portafolio/" . $value->category_slug . "/" . $value->slug;
            $codigo .='</loc>
                <lastmod>' . $date . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
                </url>';
        }
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>1.00</priority>';
        $codigo .='</url>';
        $codigo .='<url>';
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . 'servicios' . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
        $codigo .='</url>';
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . 'contacto' . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
        $codigo .='</url>';
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . 'portafolio' . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
        $codigo .='</url>';
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . 'demo' . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
        $codigo .='</url>';
        $codigo .='<url>';
        $codigo .='<loc>' . site_url() . 'terminos-y-condiciones' . '</loc>';
        $codigo .='<lastmod>2020-07-28T19:18:39+00:00</lastmod>';
        $codigo .='<changefreq>weekly</changefreq>
                       <priority>0.80</priority>';
        $codigo .='</url>';
        $codigo .='</urlset>';
        $path = "sitemap.xml";
        $modo = "w+";

        if ($fp = fopen($path, $modo)) {
            fwrite($fp, $codigo);
            echo "Se realizo con Exito";
        } else {
            echo "Error";
        }
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
