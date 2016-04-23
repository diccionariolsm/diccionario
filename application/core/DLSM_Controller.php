<?php

defined('BASEPATH')OR die('No direct script access allowe');

class DLSM_Controller extends CI_Controller{

	function __construct(){

		parent::__construct();

		$this->config->load('diccionario');
		$this->load->helper('url');
		//$this->load->database();
	}
}