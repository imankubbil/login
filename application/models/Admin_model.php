<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getProduct()
	{
		$data = $this->db->get('product')->result_array();
		return $data;

	}






}