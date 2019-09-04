<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        $data['menu'] = $this->db->get('user_menu')->result_array();
        // $data['menu'] = $this->db->get_where('user_menu', ["menu" => $this->session->userdata('menu')])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', array('menu' => $this->input->post('menu')));
            $this->session->set_flashdata('message', 'has been sent');
            redirect('menu');
        }
    }

    public function menuEdit()
    {

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
            'menu' => $this->input->post('menu', true)
            ];
            // $this->db->insert('user_menu', array('menu' => $this->input->post('menu')));
            $id = $this->input->post('id', true);
            $this->db->where('id', $id);
            $this->db->update('user_menu', $data);

            $this->session->set_flashdata('message', 'Berhasil Edit Data Menu');
            redirect('menu');
        }


    }

    public function menuDelete($id)
    {
            

        $this->db->where('id', $id);
        $this->db->delete('user_menu');
        $this->session->set_flashdata('message', 'Menu dihapus');
        redirect('menu');
    }

    public function subMenuDelete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', 'SubMenu dihapus');
        redirect('menu/submenu');
    }

    public function submenu()
    {
        $data['title'] = ' Submenu Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];
        // Untuk load model dan ubah nama model
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = array(
                "title" => $this->input->post('title', true),
                "menu_id" => $this->input->post('menu_id', true),
                "url" => $this->input->post('url', true),
                "icon" => $this->input->post('icon', true),
                "is_active" => $this->input->post('is_active', true)

            );

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '
                New Submenu added');
            redirect('menu/submenu');
        }
    }

    public function subMenuEdit()
    {
        $this->load->model('Menu_model', 'menu');

        $data['title'] = ' Submenu Management Edit';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        
        // echo 'Selamat Datang ' . $data['user']['name'];
        // Untuk load model dan ubah nama model

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $id = $this->uri->segment(3);
            $data['user_sub_menu'] = $this->menu->getSubMenuById($id);

            // print_r($data);
            // die;

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu-edit', $data);
            $this->load->view('templates/footer');
        } else {
            // $data = $this->input->post();
            // print_r($data);
            // die;
            $this->menu->subMenu_update();           
            $this->session->set_flashdata('message', 'Submenu has been updated');
            redirect('menu/submenu');
        }
    }
}
