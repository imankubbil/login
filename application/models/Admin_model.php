<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function getProduct()
	{
		// $data = $this->db->get('product')->order_by('id_product', 'desc')->result_array();

		 $data = $this->db->select('*')->from('product')->order_by('id_product', 'desc')->get()->result_array();

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

	public function getkatalog()
	{
		$data = $this->db->get('catalogue')->result_array();
		return $data;
	}

	public function getKatalogById($id)
	{
		$data = $this->db->select('*')->from('catalogue')->where('id_catalogue', $id)->get()->row_array();
		return $data;
	}

	public function deleteKatalog($id)
	{
		$this->db->where('id_catalogue', $id);
		$data = $this->db->delete('catalogue');

		return $data;
	}

	public function amount()
	{
		$user = $this->db->get('user')->num_rows();
		$product = $this->db->get('product')->num_rows();
		$catalogue = $this->db->get('catalogue')->num_rows();

		$data['user'] = $user;
		$data['product'] = $product;
		$data['catalogue'] = $catalogue;

		return $data;
	}

	public function getUser()
	{
		$data = $this->db->get('user')->result_array();
		return $data;
	}

	public function getUserById($id)
	{
		$data = $this->db->select('*')->from('user')->where('id', $id)->get()->row_array();
		return $data;
	}

}