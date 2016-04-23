<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends DLSM_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		echo "Funciona controllador";

		//echo $ths->config->item();
		 echo __BASE_URL.'<br>';
		 echo __URL_BOOTSTRAP_CSS.'<br>';
		 echo __URL_BOOTSTRAP_JS.'<br>';
		 echo __URL_JQUERY.'<br>';
		 echo __URL_CSS.'<br>';
		 echo __URL_IMAGES.'<br>';
		 echo __URL_VIDEOS.'<br>';
		 echo __URL_FONTAWESOME.'<br>';
		//$this->load->view('welcome_message');
	}
}
