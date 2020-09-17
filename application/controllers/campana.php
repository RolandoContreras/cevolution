<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Campana extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model("customer_model", "obj_customer");
//        $this->load->model("customer_courses_model", "obj_customer_courses");
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
//send data
        $data['title'] = "Crea tu Landing Page | Evolucion Web";
        $this->load->view('campanas/landing/camapana1', $data);
    }

    public function masterclass() {
            //ACTIVE CUSTOMER NORMALY
        if ($this->input->is_ajax_request()) {
            //SELECT CUSTOMER_ID
            $name = $this->input->post("name");
            $email = trim($this->input->post("email"));
            //verify email
            $obj_customer = $this->verify_email($email);
            if (!empty($obj_customer)) {
                //verify masterclass
                $this->verify_masterclass($obj_customer->customer_id);
                //start session
                $data_customer_session['customer_id'] = $obj_customer->customer_id;
                $data_customer_session['name'] = $obj_customer->name;
                $data_customer_session['last_name'] = "";
                $data_customer_session['email'] = $obj_customer->email;
                $data_customer_session['active'] = 1;
                $data_customer_session['logged_customer'] = "TRUE";
                $_SESSION['customer'] = $data_customer_session;
                //send to master class
                $data['url'] = "virtual/transformacion-personal/camino-hacia-la-transformacion-sobrenatural";
                $data['status'] = true;
            } else {
                //create passtowrd rand
                $pass = $this->crear_pass_rand();
                //create account customer
                $param = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $pass,
                    'instructor' => 0,
                    'date' => date("Y-m-d H:i:s"),
                    'country' => 28,
                    'active' => 1,
                );
                $customer_id = $this->obj_customer->insert($param);
                //send welcome message
                $this->message($name, $email, $pass);
                //create coruse by customer
                $param_new_customer = array(
                    'customer_id' => $customer_id,
                    'course_id' => 2,
                    'date_start' => date("Y-m-d H:i:s")
                );
                $this->obj_customer_courses->insert($param_new_customer);
                //start session
                $data_customer_session['customer_id'] = $customer_id;
                $data_customer_session['name'] = $name;
                $data_customer_session['email'] = $email;
                $data_customer_session['active'] = 1;
                $data_customer_session['logged_customer'] = "TRUE";
                $_SESSION['customer'] = $data_customer_session;
                //set url to send to course
                $data['url'] = "virtual/transformacion-personal/camino-hacia-la-transformacion-sobrenatural";
                $data['status'] = true;
            }
            echo json_encode($data);
        }
    }

    //vista pagar por campaña
    public function pagar() {
//send data
        $data['title'] = "Pagar Pedido | Transformación | Expansión Consciente";
        $this->load->view('campanas/pagar', $data);
    }

    public function new_customer() {
    //ACTIVE CUSTOMER NORMALY
        if ($this->input->is_ajax_request()) {
            //SELECT CUSTOMER_ID
            $name = $this->input->post("name");
            $email = trim($this->input->post("email"));
            //verify email
            $obj_customer = $this->verify_email($email);
            if (!empty($obj_customer)) {
                //start session
                $data_customer_session['customer_id'] = $obj_customer->customer_id;
                $data_customer_session['name'] = $obj_customer->name;
                $data_customer_session['last_name'] = "";
                $data_customer_session['email'] = $obj_customer->email;
                $data_customer_session['active'] = 1;
                $data_customer_session['logged_customer'] = "TRUE";
                $_SESSION['customer'] = $data_customer_session;
            //send to master class
                $data['status'] = true;
            } else {
                //create passtowrd rand
                $pass = $this->crear_pass_rand();
                //create account customer
                $param = array(
                    'name' => $name,
                    'email' => $email,
                    'password' => $pass,
                    'instructor' => 0,
                    'date' => date("Y-m-d H:i:s"),
                    'country' => 28,
                    'active' => 1,
                );
                $customer_id = $this->obj_customer->insert($param);
                //send message
                $this->message($name, $email, $pass);
                //start session
                $data_customer_session['customer_id'] = $customer_id;
                $data_customer_session['name'] = $name;
                $data_customer_session['email'] = $email;
                $data_customer_session['active'] = 1;
                $data_customer_session['logged_customer'] = "TRUE";
                $_SESSION['customer'] = $data_customer_session;
//set url to send to course
                $data['status'] = true;
            }
            echo json_encode($data);
        }
    }

    public function programa_add_cart1() {
        if ($this->input->is_ajax_request()) {
//GET CUSTOMER_ID
            $param = array(
                'id' => 3,
                'qty' => 1,
                'price' => 69,
                'free' => 0,
                'img' => "",
                'name' => "Transformacion sobrenatural",
            );
            $cart_id = $this->cart->insert($param);
            if ($cart_id != "") {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function add_cart_campana1() {
        if ($this->input->is_ajax_request()) {
//GET CUSTOMER_ID
            $param = array(
                'id' => 3,
                'qty' => 1,
                'price' => 69,
                'free' => 0,
                'img' => "",
                'name' => "Transformacion sobrenatural",
            );
            $cart_id = $this->cart->insert($param);
            if ($cart_id != "") {
                $data['status'] = true;
            } else {
                $data['status'] = false;
            }
            echo json_encode($data);
        }
    }

    public function crear_pass_rand() {
        $longitud = 8; // longitud del password.
        $pass = substr(md5(rand()), 0, $longitud);
        return($pass); // devuelve el password.
    }

    public function success() {
//obtener datos del cliente
        $customer_id = $_SESSION['customer']['customer_id'];
//create course by customer
        $data = array(
            'customer_id' => $customer_id,
            'course_id' => 3,
            'date_start' => date("Y-m-d H:i:s")
        );
        $this->obj_customer_courses->insert($data);
//redirigir al curso
        redirect(site_url() . "virtual/transformacion-personal/transformacion-sobrenatural");
    }

    public function canceled() {
//redirigir al curso
        redirect(site_url() . "transformacion/pagar");
    }

    public function verify_email($email) {
        $params = array(
            "select" => "customer_id,
                        name,
                        email",
            "where" => "email = '$email'");
//GET DATA COMMENTS
        $obj_customer = $this->obj_customer->get_search_row($params);
        return $obj_customer;
    }

    public function verify_masterclass($customer_id) {
//get data
        $params = array(
            "select" => "customer_course_id",
            "where" => "customer_id = $customer_id and course_id = 2");
//GET DATA COMMENTS
        $result = $this->obj_customer_courses->total_records($params);
//verify
        if ($result == 0) {
//create coruse by customer
            $data = array(
                'customer_id' => $customer_id,
                'course_id' => 2,
                'date_start' => date("Y-m-d H:i:s")
            );
            $result = $this->obj_customer_courses->total_records($data);
        }
    }

    public function message($name, $email, $pass) {
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
                <td style='padding:39px 30px 31px;display:block;background:#fafafa'> Hola $name</td>
              </tr>
              <tr>
                <td style='padding:0 30px;display:block;background:#fafafa'>
                  <table style='background-color:#ffffff;box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;max-width:560px' width='100%' cellspacing='0' cellpadding='0' bgcolor='#ffffff'>
<tbody><tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:20px;padding-right:20px;padding-top:20px;vertical-align:top' valign = 'top'>
<font color = '#888888'>
</font><table style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0' width = '100%' cellspacing = '0' cellpadding = '0'>
<tbody>
<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
Qué bueno que seas parte de Expansión Consciente, ahora comienza un nuevo camino para ti.
</td>
</tr>

<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
Te dejamos tus datos de acceso
</td>
</tr>

<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
Email : $email<br/>
Passqord : $pass
</td>
</tr>

<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
Ingresa a tu cuenta a través del siguiente enlace
</td>
</tr>

<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
<p style = 'margin:0;text-align:center;line-height:20px;color:#888888;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI','Roboto','Oxygen','Ubuntu','Cantarell','Fira Sans','Droid Sans','Helvetica Neue',sans-serif;font-size:12px'>
Visítanos en <a href = 'https://expansionconciente.com' style = 'color:#2d6ced;text-decoration:none' target = '_blank'>www.expansionconciente.com</a></p>
</td></tr>

<tr style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0'>
<td style = 'box-sizing:border-box;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:inherit;margin-bottom:0;margin-left:0;margin-right:0;margin-top:0;padding-bottom:20px;padding-left:0;padding-right:0;padding-top:0;vertical-align:top' valign = 'top'>
--Expanción Consciente
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
</td>
</tr>
</tbody>
</table>
</div>
.</html>", 70, "\n", true);
        $titulo = "Bienvenido - [Expansión Consciente]";
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;charset = iso-8859-1\r\n";
        $headers .= "From: Expansión Consciente <noreplay@expansionconciente.com>\r\n";
        $bool = mail("$email", $titulo, $mensaje, $headers);
    }

}
