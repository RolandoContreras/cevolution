<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_testimonios extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("testimony_model","obj_testimony");
    }   
                
    public function index(){  
        
           $this->get_session();
           $params = array(
                        "select" =>"testimony.testimony_id,
                                    testimony.name,
                                    testimony.description,
                                    testimony.date,
                                    testimony.img,
                                    testimony.web,
                                    testimony.active",
               
                        );
           //OBTENER TODOS LOS TESTIMONIOS
           $obj_testimony = $this->obj_testimony->search($params);
            //ENVIAR LA INFORMACIÓN
            $this->tmp_mastercms->set("obj_testimony",$obj_testimony);
            $this->tmp_mastercms->render("dashboard/testimonios/testimony_list");
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $testimony_id = $this->input->post("testimony_id");
        $name = $this->input->post("name");
        $description =  $this->input->post('description');
        $active =  $this->input->post('active');
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/backoffice/img/testimonios/';
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
        
        if($testimony_id != ""){
             $data = array(
                'name' => $name,
                'img' => $img,
                'description' => $description, 
                'web' => $this->input->post("web"), 
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_testimony->update($testimony_id, $data);
        }else{
            $data = array(
                'name' => $name,
                'img' => $img,
                'description' => $description, 
                'web' => $this->input->post("web"), 
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                );          
             $this->obj_testimony->insert($data);        
            //SAVE DATA IN TABLE    
        }    
        redirect(site_url()."dashboard/testimonios");
    }
    
    public function load($obj_testimony=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($obj_testimony != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "testimony.testimony_id = $obj_testimony";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_testimony  = $this->obj_testimony->get_search_row($params); 
            //ENVIAR A LA VISTA
            $this->tmp_mastercms->set("obj_testimony",$obj_testimony);
          }
          //CARGAR VISTA
            $this->tmp_mastercms->render("dashboard/testimonios/testimony_form");    
    }
    
    public function delete(){
         if ($this->input->is_ajax_request()) {
             //OBETENER MARCA_ID
             $testimony_id = $this->input->post("testimony_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($testimony_id != ""){
                $this->obj_testimony->delete($testimony_id);
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