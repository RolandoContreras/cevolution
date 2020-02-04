<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_marcas extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("marcas_model","obj_marcas");
    }   
                
    public function index(){  
        
           $this->get_session();
           //OBTENER TODOS LAS MARCAS
           $params = array(
                        "select" =>"marcas.marca_id,
                                    marcas.name,
                                    marcas.img,
                                    marcas.date,
                                    marcas.active",
                        );
           $obj_marcas = $this->obj_marcas->search($params);
            //ENVIAR LA INFORMACIÓN
            $this->tmp_mastercms->set("obj_marcas",$obj_marcas);
            $this->tmp_mastercms->render("dashboard/marcas/marca_list");
    }
    
    public function load($obj_marca=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($obj_marca != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "marcas.marca_id = $obj_marca";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_marcas  = $this->obj_marcas->get_search_row($params); 
            //ENVIAR A LA VISTA
            $this->tmp_mastercms->set("obj_marcas",$obj_marcas);
          }
          //CARGAR VISTA
            $this->tmp_mastercms->render("dashboard/marcas/marca_form");    
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $marca_id = $this->input->post("marca_id");
        $name = $this->input->post("name");
        $active =  $this->input->post('active');
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/backoffice/img/marcas/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 3000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img = $_FILES["image_file"]["name"];        
                 if($img == ""){
                     $img = $this->input->post("img_2");
                 }   
            }
        
        if($marca_id != ""){
             $data = array(
                'name' => $name,
                'img' => $img,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_marcas->update($marca_id, $data);
        }else{
            $data = array(
                'name' => $name,
                'img' => $img,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                );          
             $this->obj_marcas->insert($data);        
            //SAVE DATA IN TABLE    
        }    
        redirect(site_url()."dashboard/marcas");
    }
    
    public function delete(){
         if ($this->input->is_ajax_request()) {
             //OBETENER MARCA_ID
             $marca_id = $this->input->post("marca_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($marca_id != ""){
                $this->obj_marcas->delete($marca_id);
            }
            $data['status'] = true;
            echo json_encode($data);
        }       
    }
    
    public function get_session(){          
        if (isset($_SESSION['usercms'])){
            if($_SESSION['usercms']['logged_usercms']=="TRUE" && $_SESSION['usercms']['status']==1){               
                return true;
            }else{
                redirect(site_url().'dashboard');
            }
        }else{
            redirect(site_url().'dashboard');
        }
    }
}
?>