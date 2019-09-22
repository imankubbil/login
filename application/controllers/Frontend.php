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
        

        // $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('frontend/header2', $data);
        $this->load->view('frontend/index2', $data);
        $this->load->view('frontend/footer2');
        // $this->_cekData(); 

    }




}