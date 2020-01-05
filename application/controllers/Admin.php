<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Dashboard';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        
        $data['data'] = $this->Admin_model->amount();

        // echo json_encode($data);
        // die();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/footer');
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        $data['role'] = $this->db->get_where('user_role', array('id' => $role_id))->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = array(
            'role_id' => $role_id,
            'menu_id' => $menu_id
        );

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Access Changed!</div>');
    }

    public function product()
    {
         $data['title'] = 'Product Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Admin_model->getProduct();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/product', $data);
        $this->load->view('templates/footer');
    }

    public function addProduct()
    {
        $data['title'] = 'Add Product';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');


        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add-product', $data);
        $this->load->view('templates/footer');
        }else{
            $data = [
                'product_name' => $this->input->post('product_name', true),
                'image' => $_FILES['image']['name'],
                'deskripsi' => $this->input->post('deskripsi', true),
                'created' => $this->input->post('created', true)
            ];

            $file_name = $this->uploadImage($_FILES['image']['tmp_name']);

            $result = $this->db->insert('product', $data);
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('admin/product');
        }
    }

    public function uploadImage()
    {
        $this->data['notification'] = '';
         $config['upload_path']   = './assets/img/product'; 
         $config['allowed_types'] = 'jpg|png|jpeg'; 
         $config['max_size']      = 10240;
         $config['overwrite']     = true; 


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $this->session->set_flashdata('error', "Swal.fire('ERROR', 'File too big', 'error')");
            redirect('admin/addProduct');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $this->upload->data("file_name");   
        }

    }

    public function katalogUpload()
    {
         $this->data['notification'] = '';
         $config['upload_path']   = './assets/img/catalogue'; 
         $config['allowed_types'] = 'jpg|png|jpeg'; 
         $config['max_size']      = 10240;
         $config['overwrite']     = true; 


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $this->session->set_flashdata('error', "Swal.fire('ERROR', 'File too big', 'error')");
            redirect('admin/addKatalog');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $this->upload->data("file_name");   
        }
    }

    public function editProduct()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Edit Product';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Admin_model->getProductById($id);

        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-product', $data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->input->post('id_product', true);
            
            $upload_image = $_FILES['image']['name'];

            if ($upload_image == "" || $upload_image == NULL) {
                $data = [
                    'product_name'  => $this->input->post('product_name', true),
                    'deskripsi'     => $this->input->post('deskripsi', true),
                    'created'       => $this->input->post('created', true)
                ];
            } else {
                $get_old_image = $this->db->get_where('product', ['id_product' => $id])->row_array()['image'];
                if ($get_old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/product/' . $get_old_image);
                } 
                $data = [
                    'product_name'  => $this->input->post('product_name', true),
                    'deskripsi'     => $this->input->post('deskripsi', true),
                    'created'       => $this->input->post('created', true),
                    'image'         => $this->uploadImage($_FILES['image']['tmp_name'])
                ];
            }

            $this->db->where('id_product', $id);
            $result = $this->db->update('product', $data);

            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('admin/product');
        }
    }

    public function deleteProduct()
    {
        $id = $this->uri->segment(3);

        $get_old_image = $this->db->get_where('product', ['id_product' => $id])->row_array()['image'];
                if ($get_old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/product/' . $get_old_image);
                } 
        $result = $this->Admin_model->deleteProduct($id);


         if ($result > 0) {
            $this->session->set_flashdata('message', 'Has Been Deleted');
            // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Deleted');
            }
            redirect('admin/product');   
    }

    public function katalog()
    {
        $data['title'] = 'Catalogue Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $data['data'] = $this->Admin_model->getKatalog();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/katalog', $data);
        $this->load->view('templates/footer');

    }

    public function addKatalog()
    {
        $data['title'] = 'Add Catalogue';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('catalogue_name', 'Catalogue Name', 'required|trim');
        $this->form_validation->set_rules('periode', 'Periode', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add-katalog', $data);
        $this->load->view('templates/footer');
        }else{
            $data = [
                'catalogue_name' => $this->input->post('catalogue_name', true),
                'image' => $_FILES['image']['name'],
                'periode' => $this->input->post('periode', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'created' => $this->input->post('created', true)
            ];

            $file_name = $this->katalogUpload($_FILES['image']['tmp_name']);

            $result = $this->db->insert('catalogue', $data);
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('admin/katalog');
        }
    }

    public function editKatalog()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Edit Catalogue';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Admin_model->getKatalogById($id);

        $this->form_validation->set_rules('catalogue_name', 'Catalogue Name', 'required|trim');
        $this->form_validation->set_rules('periode', 'Periode', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-katalog', $data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->input->post('id_catalogue', true);
            
            $upload_image = $_FILES['image']['name'];

            if ($upload_image == "" || $upload_image == NULL) {
                $data = [
                    'catalogue_name'  => $this->input->post('catalogue_name', true),
                    'periode'     => $this->input->post('periode', true),
                    'deskripsi'     => $this->input->post('deskripsi', true),
                    'created'       => $this->input->post('created', true)
                ];
            } else {
                $get_old_image = $this->db->get_where('catalogue', ['id_catalogue' => $id])->row_array()['image'];
                if ($get_old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/catalogue/' . $get_old_image);
                } 
                $data = [
                    'catalogue_name' => $this->input->post('catalogue_name', true),
                    'periode'        => $this->input->post('periode', true),
                    'deskripsi'      => $this->input->post('deskripsi', true),
                    'created'        => $this->input->post('created', true),
                    'image'          => $this->katalogUpload($_FILES['image']['tmp_name'])
                ];
            }

            $this->db->where('id_catalogue', $id);
            $result = $this->db->update('catalogue', $data);

            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('admin/katalog');
        }
    }

    public function deleteKatalog()
    {
        $id = $this->uri->segment(3);

        $get_old_image = $this->db->get_where('catalogue', ['id_catalogue' => $id])->row_array()['image'];
                if ($get_old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/catalogue/' . $get_old_image);
                } 
        $result = $this->Admin_model->deleteKatalog($id);


         if ($result > 0) {
            $this->session->set_flashdata('message', 'Has Been Deleted');
            // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Deleted');
            }
            redirect('admin/katalog');   
    }

    public function usermanagement()
    {
        $data['title'] = 'User Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $data['data'] = $this->Admin_model->getUser();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/user-management', $data);
        $this->load->view('templates/footer');

    }

    public function editusermanagement()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Edit User Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Admin_model->getUserById($id);

        if(isset($_POST['submit']))
        {
            
            $data = [
                'role_id'=> $this->input->post('role_id', true),
                'is_active' => $this->input->post('is_active', true)
            ];
            $id = $this->input->post('id', true);
            $this->db->where('id', $id);
            $result = $this->db->update('user', $data);
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('admin/usermanagement');
        }else{
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-user-management', $data);
            $this->load->view('templates/footer');
        }
    }

    public function deleteUserManagement()
    {
        $id = $this->uri->segment(3);
        
        $this->db->where('id', $id);
        $result = $this->db->delete('user');
        if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Deleted');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Deleted');
            }
            redirect('admin/usermanagement');

    }






}
