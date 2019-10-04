<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);

        $queryMenu = $ci->db->get_where('user_menu', array('menu' => $menu))->row_array();
        
        $menu_id = $queryMenu['id'];
        
        $userAccess = $ci->db->get_where('user_access_menu', array(
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ));

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function getRupiah($harga) {
    $a    = (string)$harga;
    $len  = strlen($a);
 
    if($len <= 18) {
        $ratril  = $len-3-1;
        $ramil   = $len-6-1;
        $rajut   = $len-9-1;
        $juta    = $len-12-1;
        $ribu    = $len-15-1;
 
        $angka='';
        for($i = 0; $i < $len; $i++) {
            if($i == $ratril) {
                $angka=$angka.$a[$i].".";
            } else if($i == $ramil){
                $angka = $angka.$a[$i].".";
            } else if($i == $rajut) {
                $angka = $angka.$a[$i].".";
            } else if($i == $juta) {
                $angka = $angka.$a[$i].".";
            } else if($i == $ribu) {
                $angka = $angka.$a[$i].".";
            } else {
                $angka = $angka.$a[$i];
            }
        }
    }
    return $angka.",-";
}

function getMenu($menu_id)
{
    $ci = get_instance();
    $result = $ci->db->get_where('user_menu', ['id' => $menu_id])->row_array();
    return $result;
}

function get_status($id_answer, $id_question, $urutan)
{
    $CI =& get_instance();
    $result = $CI->db->get_where('answer', ['id_question' => $id_question, 'id_answer' => $id_answer, 'urutan' => $urutan])->row_array();
    return $result['status'];
}

function getJobRequire($id_jobvacancy)
{
    $CI =& get_instance();
    $result = $CI->db->get_where('job_vacancy', ['id_jobvacancy' => $id_jobvacancy])->row_array();
    return $result['job_require'];
}

function getIdJobvacancy($job_require)
{
    $CI =& get_instance();
    $result = $CI->db->get_where('job_vacancy', ['job_require' => $job_require])->row_array();
    return $result['id_jobvacancy'];
}
