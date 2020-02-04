<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_diseños extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("diseño_model","obj_diseños");
    }   
                
    public function index(){  
        
           $this->get_session();
           //OBTENER TODOS LOS DISEÑOS
           $params = array(
                        "select" =>"diseños.diseño_id,
                                    diseños.name,
                                    diseños.img,
                                    diseños.date,
                                    diseños.active",
                        );
           $obj_diseños = $this->obj_diseños->search($params);
            //ENVIAR LA INFORMACIÓN
            $this->tmp_mastercms->set("obj_diseños",$obj_diseños);
            $this->tmp_mastercms->render("dashboard/diseños/diseño_list");
    }
    
    public function load($obj_diseño=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($obj_diseño != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "diseño_id = $obj_diseño";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_diseños  = $this->obj_diseños->get_search_row($params); 
            //ENVIAR A LA VISTA
            $this->tmp_mastercms->set("obj_diseños",$obj_diseños);
          }
          //CARGAR VISTA
            $this->tmp_mastercms->render("dashboard/diseños/diseño_form");    
    }
    
    public function validate(){
        
        //GET CUSTOMER_ID
        $diseño_id = $this->input->post("diseno_id");
        $name = $this->input->post("name");
        $active =  $this->input->post('active');
        
        if(isset($_FILES["image_file"]["name"])){
                $config['upload_path']          = './static/backoffice/img/diseños/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
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
            
        if(isset($_FILES["image_file2"]["name"])){
                $config['upload_path']          = './static/backoffice/img/diseños/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000;
                $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload('image_file2')){
                         $error = array('error' => $this->upload->display_errors());
                          echo '<div class="alert alert-danger">'.$error['error'].'</div>';
                    }else{
                        $data = array('upload_data' => $this->upload->data());
                    }
                $img2 = $_FILES["image_file2"]["name"];        
                 if($img2 == ""){
                     $img2 = $this->input->post("img_3");
                 }   
            }    
            
            
        
        if($diseño_id != ""){
             $data = array(
                'name' => $name,
                'img' => $img,
                'img_2' => $img2,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_diseños->update($diseño_id, $data);
        }else{
            $data = array(
                'name' => $name,
                'img' => $img,
                'img_2' => $img2,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                );          
             $this->obj_diseños->insert($data);        
            //SAVE DATA IN TABLE    
        }    
        redirect(site_url()."dashboard/disenos");
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