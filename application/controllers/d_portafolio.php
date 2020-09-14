<?php

if (!defined("BASEPATH"))
    exit("No direct script access allowed");

class D_portafolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("portafolio_model", "obj_portafolio");
        $this->load->model("category_model", "obj_category");
    }

    public function index() {
        $this->get_session();
        //OBTENER TODOS LOS DISEÑOS
        $params = array(
            "select" => "portafolio.portafolio_id,
                                    portafolio.name,
                                    portafolio.img1,
                                    portafolio.date,
                                    portafolio.status,
                                    category.name as category,",
            "join" => array('category, portafolio.category_id = category.category_id')
        );
        $obj_portafolio = $this->obj_portafolio->search($params);
        //ENVIAR LA INFORMACIÓN
        $this->tmp_mastercms->set("obj_portafolio", $obj_portafolio);
        $this->tmp_mastercms->render("dashboard/portafolio/portafolio_list");
    }

    public function load($obj_portafolio = NULL) {
        //VERIFY IF ISSET CUSTOMER_ID
        if ($obj_portafolio != "") {
            /// PARAMETROS PARA EL SELECT 
            $where = "portafolio_id = $obj_portafolio";
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
                                    category.category_id",
                "join" => array('category, portafolio.category_id = category.category_id'),
                "where" => $where);

            $obj_portafolio = $this->obj_portafolio->get_search_row($params);
            
            //ENVIAR A LA VISTA
            $this->tmp_mastercms->set("obj_portafolio", $obj_portafolio);
        }
        $params = array(
            "select" => "category_id,
                                    name",
            "where" => "active = 1"
        );
        $obj_category = $this->obj_category->search($params);
        //ENVIAR LA INFORMACIÓN
        $this->tmp_mastercms->set("obj_category", $obj_category);
        $this->tmp_mastercms->render("dashboard/portafolio/portafolio_form");
    }

    public function validate() {

        //GET CUSTOMER_ID
        $portafolio_id = $this->input->post("portafolio_id");
        $name = $this->input->post("name");
        $slug = convert_slug($name);
        $description = $this->input->post("description");
        $category_id = $this->input->post("category_id");
        $status = $this->input->post('status');
        //get data img
        $img_1 = $this->input->post('img_1');
        $img_2 = $this->input->post('img_2');
        $img_3 = $this->input->post('img_3');
        $img_4 = $this->input->post('img_4');
        $img_5 = $this->input->post('img_5');
        $img_6 = $this->input->post('img_6');
        
        //verify
        if ($portafolio_id != "") {
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'category_id' => $category_id,
                'description' => $description,
                'date' => date("Y-m-d H:i:s"),
                'status' => $status,
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
            );
            $this->obj_portafolio->update($portafolio_id, $data);
        } else {
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'category_id' => $category_id,
                'description' => $description,
                'date' => date("Y-m-d H:i:s"),
                'status' => $status,
            );
            $portafolio_id = $this->obj_portafolio->insert($data);
            //SAVE DATA IN TABLE    
        }

        //save image
        $img1 = $_FILES['image_file'];
        $img2 = $_FILES['image_file2'];
        $img3 = $_FILES['image_file3'];
        $img4 = $_FILES['image_file4'];
        $img5 = $_FILES['image_file5'];
        $img6 = $_FILES['image_file6'];
        
        if($img1 == ""){
            
        }else{
        }
        
        $templocation = $img1["tmp_name"];
        $templocation2 = $img2["tmp_name"];
        $templocation3 = $img3["tmp_name"];
        $templocation4 = $img4["tmp_name"];
        $templocation5 = $img5["tmp_name"];
        $templocation6 = $img6["tmp_name"];
        //ser name
        $name = $img1["name"];
        $name2 = $img2["name"];
        $name3 = $img3["name"];
        $name4 = $img4["name"];
        $name5 = $img5["name"];
        $name6 = $img6["name"];
        if ($name != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation, "./static/cms/img/portafolio/$portafolio_id/$name")) {
                $img = $name;
            }
         }else{
             $img = $img_1;
         }
         
         if ($name2 != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation2) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation2, "./static/cms/img/portafolio/$portafolio_id/$name2")) {
                $img2 = $name2;
            }
         }else{
             $img2 = $img_2;
         }
         
         if ($name3 != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation3) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation3, "./static/cms/img/portafolio/$portafolio_id/$name3")) {
                $img3 = $name3;
            }
         }else{
             $img3 = $img_3;
         }
         
         if ($name4 != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation4) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation4, "./static/cms/img/portafolio/$portafolio_id/$name4")) {
                $img4 = $name4;
            }
         }else{
             $img4 = $img_4;
         }
         
         if ($name5 != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation5) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation5, "./static/cms/img/portafolio/$portafolio_id/$name5")) {
                $img5 = $name5;
            }
         }else{
             $img5 = $img_5;
         }
         
         if ($name6 != null) {
            if (!is_dir("./static/cms/img/portafolio/$portafolio_id")) {
                mkdir("./static/cms/img/portafolio/$portafolio_id", 0777);
            }
            if (!$templocation6) {
                die("No se ha seleccionado ningun archivos");
            }
            if (move_uploaded_file($templocation6, "./static/cms/img/portafolio/$portafolio_id/$name6")) {
                $img6 = $name6;
            }
         }else{
             $img6 = $img_6;
         }
            //set data to save
            $param = array(
                'img1' => $img,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'img5' => $img5,
                'img6' => $img6,
                
            );
            //SAVE DATA IN TABLE PORTAFOLIO
            $this->obj_portafolio->update($portafolio_id, $param);
        
        redirect(site_url() . "dashboard/portafolio");
    }

    public function delete() {
        if ($this->input->is_ajax_request()) {
            //OBETENER MARCA_ID
            $marca_id = $this->input->post("marca_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($marca_id != "") {
                $this->obj_marcas->delete($marca_id);
            }
            $data['status'] = true;
            echo json_encode($data);
        }
    }

    public function get_session() {
        if (isset($_SESSION['usercms'])) {
            if ($_SESSION['usercms']['logged_usercms'] == "TRUE" && $_SESSION['usercms']['status'] == 1) {
                return true;
            } else {
                redirect(site_url() . 'dashboard');
            }
        } else {
            redirect(site_url() . 'dashboard');
        }
    }

}

?>