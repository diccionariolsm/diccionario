<?php
defined('BASEPATH')OR exit('No direct script access allowe');

/**
* Controlador que carga la pág. de Inicio
* Versión 1.0.0
* Author: Margarita Osorio Orozco
* Mail: margarita.escu.1988@gmail.com
*/

class Home extends DLSM_Controller
{
	
	function __construct()
	{
		parent::__construct();

		
	}

	function index(){
		echo "Hola Inicio";
	}
}