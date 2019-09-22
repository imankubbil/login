<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend_model extends CI_Model
{
	public function getProductById($id)
	{
		$data = $this->db->select('*')->from('product')->where('id_product', $id)->get()->row_array();
		return $data;
	}

	public function cariProduct()
	{
		$keyword= $this->input->post('keyword', true);
        $this->db->like('product_name', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('product')->result_array();
	}
}
