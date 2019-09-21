<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        // $this->load->model('Frontend_model');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Selma By Informa';
        $data['katalog'] = $this->db->select('*')->from('catalogue')->order_by('id_catalogue', 'desc')->limit(3)->get()->result_array();

        // echo json_encode($data);
        // die();
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/footer');
        

    }




}