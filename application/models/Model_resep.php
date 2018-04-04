<?php
if (!defined('BASEPATH')) exit('no direct script acces allowed');
	/**
	* 
	*/
	class Model_resep extends CI_Model
	{
		
		function getAll()
		{

			return $this->db->get('tb_resep')->result();
		}


}
?>