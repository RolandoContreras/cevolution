<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comments_model', 'obj_comments');
        $this->load->model("category_model", "obj_category");
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
        $this->load->view('contact', $data);
    }

    public function enviar_mensage() {
//        if ($this->input->is_ajax_request()) {
            if ($_POST['google-response-token']) {
                $googleToken = $_POST['google-response-token'];
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcXUs8ZAAAAAOclJoX-F4c9CS_9krhHGlWpJPvN&response={$googleToken}");
                $response = json_decode($response);
                $response = (array) $response;
                if ($response['success'] && ($response['score'] && $response['score'] > 0.5)) {
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $subject = $this->input->post('subject');
                    $message = $this->input->post('message');

                    //status_value 0 means (not read)
                    $data_param = array(
                        'name' => $name,
                        'email' => $email,
                        'comment' => $message,
                        'subject' => $subject,
                        'date_comment' => date("Y-m-d H:i:s"),
                        'status_value' => 1,
                    );
                    $comment_id = $this->obj_comments->insert($data_param);
                    if ($comment_id != null) {
                        $data['status'] = true;
                        //enviar mensaje de confirmación al correo
//                    $this->message($name, $email, $subject, $message);
                    } else {
                        $data['status'] = false;
                    }
                } else {
                    $data['status'] = "false2";
                }
            }
            echo json_encode($data);
            exit();
//        }
    }

    public function message($name, $email, $subject, $message) {
        $mensaje = wordwrap("<html>
                     <div bgcolor='#E9E9E9' style='background:#fff;margin:0;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                      <table style='background-color:#fff;border-collapse:collapse;margin:0;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0'
                        align='center'>
                        <tbody>
                          <tr>
                            <td valign='top' align='center'>
                              <table style='border-collapse:collapse;margin:0;padding:0;max-width:600px' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                <tbody>
                                  <tr>
                                    <td style='padding:39px 30px 31px;display:block;background:#fafafa'> 
                                    <p style='padding:32px 32px 0;color:#333333;background:#fff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;line-height:14px;margin:0;font-size:14px;border-radius:5px 5px 0 0'
                                        align='left'>Hola Rolando, tienes un mensaje de $name</p> 
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style='padding:0 30px;display:block;background:#fafafa'>
                                      <table style='width:100%;border-collapse:collapse;padding:0' width='100%' height='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                        <tbody>
                                          <tr>
                                            <td style='padding:0;background-color:#fff;border-radius:0 0 5px 5px;padding:32px'>
                                              <p style='margin:0;padding-bottom:20px;color:#333333;line-height:22px;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                                              A través de la sección contacto el sr(a) $name se ha comunicado contigo</p>
                                              <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                                              <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Nombre: </span><strong>$name</strong></span>
                                              </p> 
                                              <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                                              <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Email: </span><strong>$email</strong></span>
                                              </p> 
                                              <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                                              <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Asunto: </span><strong>$subject</strong></span>
                                              </p> 
                                              <p style='margin:0 0 24px;padding:16px;border-radius:5px;padding-bottom:20px;background:#f7f7f7;color:#333333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px'>
                                              <span style='display:block;padding-bottom:8px'><span style='width:101px;display:inline-block'>Mensaje: </span><strong>$message</strong></span>
                                              </p> 
                                              <a href='https://evolucionweb.tech/dashboard' style='background:#2d6ced;color:#ffffff;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:14px;display:inline-block;padding:12px 17px;text-decoration:none;border-radius:5px'
                                                target='_blank'>Iniciar Sesión - Dashboard</a>                          
                                              </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                            .</html>", 70, "\n", true);
        $titulo = "Contacto - $subject";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: EVOLUCION WEB <contacto@evolucionweb.tech>\r\n";
        $bool = mail("software.contreras@gmail.com", $titulo, $mensaje, $headers);
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
