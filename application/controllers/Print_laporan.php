<?php
Class Print_laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Personalia_model');
    }

    // function index()
    // {
    //     redirect('print_laporan');
    // }
    
    function print_data_job_applicant()
    {
        $data['title'] = 'Print Job Applicant Data';
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
       
        $data['data'] = $this->Personalia_model->getData();
        // echo json_encode($data);
        // die();

        $this->load->view('laporan/print_data_job_applicant', $data);
    }

    function detail_job_applicant($id)
    {
        $data['title']  = 'Detail Job Applicant';
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Personalia_model->getJobApplicant($id);

        $this->load->view('laporan/print_detail_job_applicant', $data);
    }
}