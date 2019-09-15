<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getProduct()
	{
		$data = $this->db->get('product')->result_array();
		return $data;

	}

	public function getProductById($id)
	{
		$data = $this->db->select('*')->from('product')->where('id_product', $id)->get()->row_array();
		return $data;
	}

	public function deleteProduct($id)
	{
		$this->db->where('id_product', $id);
		$data = $this->db->delete('product');

		return $data;
	}






}