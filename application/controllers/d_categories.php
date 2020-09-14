<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class D_categories extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("category_model","obj_category");
    }   
                
    public function index(){  
        
           $this->get_session();
           //OBTENER TODOS LAS MARCAS
           $params = array(
                        "select" =>"*",
                        );
           $obj_category = $this->obj_category->search($params);
            //ENVIAR LA INFORMACIÓN
            $this->tmp_mastercms->set("obj_category",$obj_category);
            $this->tmp_mastercms->render("dashboard/categories/categories_list");
    }
    
    public function load($category_id=NULL){
        //VERIFY IF ISSET CUSTOMER_ID
        if ($category_id != ""){
            /// PARAMETROS PARA EL SELECT 
            $where = "category_id = $category_id";
            $params = array(
                        "select" =>"*",
                         "where" => $where,
            ); 
            $obj_category  = $this->obj_category->get_search_row($params); 
            //ENVIAR A LA VISTA
            $this->tmp_mastercms->set("obj_category",$obj_category);
          }
          //CARGAR VISTA
            $this->tmp_mastercms->render("dashboard/categories/categories_form");    
    }
    
    public function validate(){
        
        //GET DATA
        $category_id = $this->input->post("category_id");
        $name = $this->input->post("name");
        $slug = convert_slug($name);
        $active =  $this->input->post('active');
        //VERIFY
        if($category_id != ""){
             $data = array(
                'name' => $name,
                'slug' => $slug,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                'updated_at' => date("Y-m-d H:i:s"),
                'updated_by' => $_SESSION['usercms']['user_id']
                );          
             $this->obj_category->update($category_id, $data);
        }else{
            $data = array(
                'name' => $name,
                'slug' => $slug,
                'date' => date("Y-m-d H:i:s"),  
                'active' => $active,  
                );          
             $this->obj_category->insert($data);        
            //SAVE DATA IN TABLE    
        }    
        redirect(site_url()."dashboard/categorias");
    }
    
    public function delete(){
         if ($this->input->is_ajax_request()) {
             //OBETENER MARCA_ID
             $category_id = $this->input->post("category_id");
            //VERIFY IF ISSET CUSTOMER_ID
            if ($category_id != ""){
                $result = $this->obj_category->delete($category_id);
                if(!empty($result)){
                    $data['status'] = true;
                }else{
                    $data['status'] = false;
                }
            }
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