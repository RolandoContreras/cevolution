<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class Demo extends CI_Controller{    
    
    public function __construct(){
        parent::__construct();
        $this->load->model("comments_model","obj_comments");
    }   
                
    public function index(){  
            //llevar a login demo
            $this->load->view('demo/login');
    }
    
    public function home(){  
        //llevar a login demo
//        $this->tmp_demo->set("obj_message",$obj_message);
        $this->tmp_demo->render("backoffice/b_home");
        $this->load->view('demo/home');
    }
    
    
    
    
    public function change_status(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
              $comment_id = $this->input->post("comment_id");
                if($comment_id != null){
                    $data = array(
                        'status_value' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_comments->update($comment_id,$data);
                    //enviar informacion
                    $data["message"] = true;
                }else{
                    $data["message"] = false;
                }
                echo json_encode($data);            
        exit();
            }
    }
    
    public function change_status_no(){
            //UPDATE DATA ORDERS
        if($this->input->is_ajax_request()){   
                $comment_id = $this->input->post("comment_id");
                if($comment_id != null){
                    $data = array(
                        'status_value' => 1,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_comments->update($comment_id,$data);
                     $data["message"] = true;
               }else{
                    $data["message"] = false;
                }
                echo json_encode($data);            
        exit();
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