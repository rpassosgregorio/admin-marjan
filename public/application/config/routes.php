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

$route['url_languages_allowed'] = $this->config->item('url_languages_allowed');
$cms_dir_default = $this->config->item('cms_dir_default');
$base_cms = $this->config->item('base_cms');
$public_view_dir = $this->config->item('public_view_dir');
$public_controller_dir = $this->config->item('public_controller_dir');
$controller_default = $this->config->item('controller_default');

$route['default_controller'] = $public_view_dir.'/'.$controller_default;
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
| ROUTES - CMS + LANG
| ANDRE SMOLIANINOFF
*/
$route[$base_cms] = $cms_dir_default.'/'.$controller_default;

foreach($route['url_languages_allowed'] as $lang){

	$route[$base_cms.'/'.$lang] = $cms_dir_default.'/'.$controller_default;
	$route[$base_cms.'/'.$lang.'/(.+)$'] = $cms_dir_default.'/$1';

}

$route[$base_cms.'/(.+)'] = $cms_dir_default.'/$1';

$route['sobre-nos'] = $public_controller_dir.'/about';
$route['sobre-nos/novos-negocios'] = $public_controller_dir.'/about/newbusiness';
$route['responsabilidade-social'] = $public_controller_dir.'/socialresponsability';
$route['produtos'] = $public_controller_dir.'/products';
$route['produtos/(:any)'] = $public_controller_dir.'/products/single/$1';
$route['saude-e-bem-estar'] = $public_controller_dir.'/healthwellness';
$route['profissionais-da-saude'] = $public_controller_dir.'/healthprofessionals';
$route['contato'] = $public_controller_dir.'/contact';
$route['noticias'] = $public_controller_dir.'/news';
$route['noticias/(:any)'] = $public_controller_dir.'/news/single/$1';
$route['carreira'] = $public_controller_dir.'/career';
$route['sala-social'] = $public_controller_dir.'/socialroom';
$route['farmacovigilancia'] = $public_controller_dir.'/pharmacovigilance';

/*
| ROUTES - LANG
| ANDRE SMOLIANINOFF
*/

foreach($route['url_languages_allowed'] as $lang){

	$route[$lang] = $public_controller_dir.'/home';
	$route[$lang.'/(.+)$'] = $public_controller_dir.'/$1';

}

$route['(.+)'] = $public_controller_dir.'/$1';
