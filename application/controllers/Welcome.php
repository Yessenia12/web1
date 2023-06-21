<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header'); 
		$this->load->view('welcome_message'); //esta llamando a la carpeta view
		//echo "Saudos a todos desde el controlador";	
		$this->load->view('footer'); 
	}
}
