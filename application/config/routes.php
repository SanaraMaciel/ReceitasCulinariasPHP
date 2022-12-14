<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['admin'] = 'admin/acesso';
$route['admin/acesso'] = 'admin/acesso/login';
$route['admin/acesso/(:num)'] = 'admin/acesso/login/$1';
$route['admin/receitas/(:num)']='admin/receitas/index/$1';
$route['admin/contato']='admin/usuarios/contato';
$route['admin/sobre']='admin/usuarios/sobre';
$route['admin/receitas']='admin/receitas/index';
$route['receitas']='usu/usuario/receitas';
$route['receitas/(:any)']='usu/usuario/receitas/$1';
$route['contato']='admin/usuarios/contato';
$route['sobre']='admin/usuarios/sobre';
$route['logout']='admin/acesso/logout';
$route['receitas_categorias/(:num)']='usu/usuario/receitas_categorias/$1';

$route['admin/receitas/ver/(:any)'] = 'admin/receitas/receitas_ver/$1';

$route['admin/usuarios'] = 'admin/usuarios/index';
$route['admin/usuarios/(:num)']='admin/usuarios/index/$1';
$route['imprimir/(:any)']='usuario/imprimir/$1';
$route['admin/imprimir/(:any)']='receitas/imprimir/$1';



$route['default_controller'] = 'usu/usuario';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
