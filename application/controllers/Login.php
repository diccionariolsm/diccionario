<?php
defined('BASEPATH')OR exit('No direct script access allowe');

/**
* Controlador de loggeo 
* Versión 1.0.0
* Author: Margarita Osorio Orozco
* Mail: margarita.escu.1988@gmail.com
*/

class Login extends DLSM_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	function index(){
		echo "Login";
	}
}
