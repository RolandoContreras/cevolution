<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Panel extends CI_Controller{
    public function __construct() {
        parent::__construct();    
        $this->load->model("comments_model","obj_comments");
    }
    
    public function index(){
        //GET THE SESSION
        $this->get_session();

         //GET PENDING ROWS
        $params = array("select" =>"count(*) as pending_comments",
                        "where" => "active = 1");
        $obj_pending = $this->obj_comments->get_search_row($params);
            
        //GET TOTAL ROWS
        $params = array("select" =>"count(comment_id) as total_comments,
                                    (select count(*) from testimony where active = 1) as total_testimony,"
                                    );
        $obj_total = $this->obj_comments->get_search_row($params);
        
        $this->tmp_mastercms->set('obj_pending',$obj_pending);
        $this->tmp_mastercms->set('obj_total',$obj_total);
        $this->tmp_mastercms->render('panel');
     }
  
    public function cambiar_status(){
        if($this->input->is_ajax_request()){   
              $comment_id = $this->input->post("comment_id");
              
                if(count($comment_id) > 0){
                    $data = array(
                        'active' => 0,
                        'updated_at' => date("Y-m-d H:i:s"),
                        'updated_by' => $_SESSION['usercms']['user_id'],
                    ); 
                    $this->obj_comments->update($comment_id,$data);
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
