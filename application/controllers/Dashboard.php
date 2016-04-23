<?php
defined('BASEPATH')OR exit('No direct script access allowe');

/**
* Controlador de loggeo 
* Versión 1.0.0
* Author: Margarita Osorio Orozco
* Mail: margarita.escu.1988@gmail.com
*/

class Dashboard extends DLSM_Controller
{
	
	function __construct()
	{
		parent::__construct();

		
	}

	function index(){
		$data['head'] = $this->load->view('layout/head',NULL,TRUE);
		$data['navbar'] = $this->load->view('layout/navbar',NULL,TRUE);
		$data['sidebar'] = $this->load->view('layout/sidebar',NULL,TRUE);
		$this->load->view('layout/html',$data);
	}
}
