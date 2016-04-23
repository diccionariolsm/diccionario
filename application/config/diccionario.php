<?php 

/**
* Archivo de configuración para el Diccionario LSM
* Versión 1.0.0
* Author: Margarita Osorio Orozco
* Mail: margarita.escu.1988@gmail.com
*/
defined('BASEPATH')OR exit('No direct script access allowed');

$config['version']='1.0.0';

$CI =& get_instance();

$base_url = $CI->config->base_url();

 define('__BASE_URL',$base_url);
 define('__URL_BOOTSTRAP_CSS',$base_url.'assets/bootstrap/css/bootstrap.min.css');
 define('__URL_BOOTSTRAP_JS',$base_url.'assets/bootstrap/js/bootstrap.min.js');
 define('__URL_JQUERY',$base_url.'assets/js/jquery.js');
 define('__URL_CSS',$base_url.'assets/css');
 define('__URL_CSS_SIDEBAR',$base_url.'assets/css/sidebar.css');
 define('__URL_IMAGES',$base_url . 'assets/media/images');
 define('__URL_VIDEOS',$base_url . 'assets/media/videos');
 define('__URL_FONTAWESOME',$base_url . 'assets/fontawesome/font-awesome.css');


