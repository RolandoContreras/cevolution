<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = 'errors/error_404';

$route['home'] = 'home';
$route['login'] = 'login';
$route['software/([0-9a-z_-]+)'] = 'software/detail';

$route['demo'] = 'demo';
$route['demo/home'] = 'demo/home';

$route['portafolio/([0-9]+)'] = 'portafolio/index/$1';
$route['portafolio/([0-9a-z_-]+)/([0-9a-z_-]+)'] = 'portafolio/detail/$1';

$route['contacto'] = 'contact';
$route['contacto'] = 'contact';
$route['contacto/enviar_mensage'] = 'contact/enviar_mensage';


$route['backoffice'] = "b_home";
$route['backoffice/productos'] = "b_product";
$route['backoffice/profile'] = "b_data";
$route['backoffice/upgrade'] = "b_upgrade";
$route['backoffice/binario'] = "b_binario";
$route['backoffice/binario/([0-9a-z_-]+)'] = "b_binario/index/$1";

$route['backoffice/compose_message'] = "b_messages/compose_message"; 
$route['logout'] = "b_home/logout";


$route['dashboard'] = "dashboard";
$route['dashboard/panel'] = "panel";
$route['dashboard/panel/guardar_btc'] = "panel/guardar_btc";
$route['dashboard/panel/masive_messages'] = "panel/masive_messages";

//SECTION
$route['dashboard/portafolio'] = "d_portafolio";
$route['dashboard/portafolio/load'] = "d_portafolio/load";
$route['dashboard/portafolio/delete'] = "d_portafolio/delete";
$route['dashboard/portafolio/load/([0-9]+)'] = "d_portafolio/load/$1";
$route['dashboard/portafolio/validate'] = "d_portafolio/validate";

$route['dashboard/testimonios'] = "d_testimonios";
$route['dashboard/testimonios/load'] = "d_testimonios/load";
$route['dashboard/testimonios/delete'] = "d_testimonios/delete";
$route['dashboard/testimonios/load/([0-9]+)'] = "d_testimonios/load/$1";
$route['dashboard/testimonios/validate'] = "d_testimonios/validate";

$route['dashboard/categorias'] = "d_categories";
$route['dashboard/categorias/load'] = "d_categories/load";
$route['dashboard/categorias/delete'] = "d_categories/delete";
$route['dashboard/categorias/load/([0-9]+)'] = "d_categories/load/$1";
$route['dashboard/categorias/validate'] = "d_categories/validate";

$route['dashboard/marcas'] = "d_marcas";
$route['dashboard/marcas/load'] = "d_marcas/load";
$route['dashboard/marcas/load/([0-9]+)'] = "d_marcas/load/$1";
$route['dashboard/marcas/delete'] = "d_marcas/delete";
$route['dashboard/marcas/validate'] = "d_marcas/validate";

$route['dashboard/disenos'] = "d_diseños";
$route['dashboard/disenos/load'] = "d_diseños/load";
$route['dashboard/disenos/load/([0-9]+)'] = "d_diseños/load/$1";
$route['dashboard/disenos/delete'] = "d_diseños/delete";
$route['dashboard/disenos/validate'] = "d_diseños/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";

$route['dashboard/comentarios'] = "d_comments";
$route['dashboard/comentarios/cambiar_status'] = "d_comments/change_status";
$route['dashboard/comentarios/cambiar_status_no'] = "d_comments/change_status_no";

$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios'] = "d_users";
$route['dashboard/usuarios/load'] = "d_users/load";
$route['dashboard/usuarios/load/([0-9]+)'] = "d_users/load/$1";
$route['dashboard/usuarios/validate'] = "d_users/validate";


/* End of file routes.php */
/* Location: ./application/config/routes.php */