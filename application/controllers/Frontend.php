<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model');
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Selma By Informa';
        $data['katalog'] = $this->db->select('*')->from('catalogue')->order_by('id_catalogue', 'desc')->limit(3)->get()->result_array();

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/footer');
        

    }

    public function product()
    {
        $data['title'] = 'Selma By Informa';

        $data['product'] = $this->db->select('*')->from('product')->order_by('id_product', 'desc')->get()->result_array();

        if( $this->input->post('keyword') ) {
            $data['product'] = $this->Frontend_model->cariProduct();
        }

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/product', $data);
        $this->load->view('frontend/footer');
    }

    public function detailProduct()
    {
         $id = $this->uri->segment(3);
         $data['title'] = 'Selma By Informa';
         $data['data'] = $this->Frontend_model->getProductById($id);

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/detail-product', $data);
        $this->load->view('frontend/footer');
    }

    public function about()
    {
        $data['title'] = 'Selma By Informa';

        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/about', $data);
        $this->load->view('frontend/footer');
    }

    public function career()
    {
        $data['title'] = 'Selma By Informa';

        $data['job'] = $this->db->select('*')->from('job_vacancy')->order_by('id_jobvacancy', 'desc')->get()->result_array();


        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/career', $data);
        $this->load->view('frontend/footer');

    }


}