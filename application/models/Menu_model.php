<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu` . *, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu` . `menu_id` = `user_menu`. `id`
                ";

        return $this->db->query($query)->result_array();
    }

    public function getMenuById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get_where('user_menu')->row_array();

    }

    public function getSubMenuById($id)
    {
    	$this->db->where('id', $id);
        return $this->db->get_where('user_sub_menu')->row_array();
    }

    public function subMenu_update()
    {
        $is_active = $this->input->post('is_active', true);

        if ($is_active == NULL || $is_active == "" ) $is_active = 0;
    	$data = [
    			"title" => $this->input->post('title', true),
                "menu_id" => $this->input->post('menu_id', true),
                "url" => $this->input->post('url', true),
                "icon" => $this->input->post('icon', true),
                "is_active" => $is_active

    	];

        // print_r($data);
        // die();
    	$this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
}
