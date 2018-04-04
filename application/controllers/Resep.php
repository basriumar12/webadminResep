<?php
defined('BASEPATH') OR exit ('no direct script acces allowed');

/**
* 
*/
class Resep extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("Model_resep");

	}

	function index (){
		$data ['result'] = $this->Model_resep-> getAll();
		$this->load->view("resep",$data);

	}
}
?>