<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personalia extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Personalia_model');
        is_logged_in();
    }

    public function index()
    {
    	$data['title'] = 'Job Applicant Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
       
        $data['data'] = $this->Personalia_model->getData();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personalia/index', $data);
        $this->load->view('templates/footer');
    }

    public function psikotestData()
    {
        $data['title'] = 'Psikotest Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

         $data['data'] = $this->Personalia_model->psikotestData();

         // echo json_encode($data);
         // die();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('personalia/psikotest-data', $data);
        $this->load->view('templates/footer');
    }

    public function addPsikotest()
    {
        $data['title'] = 'Add Psikotest Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
        $this->form_validation->set_rules('satu', 'Answer A', 'required|trim');
        $this->form_validation->set_rules('dua', 'Answer B', 'required|trim');
        $this->form_validation->set_rules('tiga', 'Answer C', 'required|trim');
        $this->form_validation->set_rules('empat', 'Answer D', 'required|trim');
        $this->form_validation->set_rules('lima', 'Answer E', 'required|trim');
        $this->form_validation->set_rules('a[]', 'Checkbox', 'required|trim');
     

        if($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('personalia/add-psikotest', $data);
            $this->load->view('templates/footer'); 
        }else {
            $result = $this->Personalia_model->addPsikotest($data['user']['name']);
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('personalia/psikotestData');
        }
        

    }

    public function detailPsikotest($id)
    {
         $data['title'] = 'Detail Psikotest Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $data['data'] = $this->Personalia_model->getPsikotestById($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('personalia/detail-psikotest', $data);
            $this->load->view('templates/footer'); 
    }

    public function editPsikotest()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'Edit Psikotest Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['data'] = $this->Personalia_model->getPsikotestById($id);

        // echo json_encode($data);
        // die();

       $this->form_validation->set_rules('question', 'Pertanyaan', 'required');
       $this->form_validation->set_rules('a[]', 'Urutan', 'required');
       $this->form_validation->set_rules('jawaban[]', 'Jawaban', 'required');


         if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('personalia/edit-psikotest', $data);
            $this->load->view('templates/footer');
        } else {
            echo json_encode($this->input->post());
            die();

            $result = $this->Personalia_model->editPsikotest();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('personalia/psikotestData');
        }
    }

    public function deletePsikotest()
    {
        $id = $this->uri->segment(3);

        $result = $this->Personalia_model->deletePsikotest($id);

       if ($result > 0) {
            $this->session->set_flashdata('message', 'Has Been Deleted');
            // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Deleted');
            }
            redirect('personalia/psikotestData');
    }

    public function jobvacancy()
    {
        $data['title'] = 'Job Vacancy Management';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $data['data'] = $this->Personalia_model->jobVacancy();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('personalia/jobvacancy', $data);
            $this->load->view('templates/footer');

    }

    public function addJobVacancy()
    {
        $data['title'] = 'Add Job Vacancy';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        
        $this->form_validation->set_rules('job_require', 'Job Require', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');

            if($this->form_validation->run() == false){
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('personalia/add-jobvacancy', $data);
                $this->load->view('templates/footer');
                
            }else{
            $result = $this->Personalia_model->addJobVacancy();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('personalia/jobvacancy');            }
    }

    public function detailJobVacancy($id)
    {
        $data['title'] = 'Detail Job Vacancy';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $data['data'] = $this->Personalia_model->getJobVacancyById($id);


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('personalia/detail-jobvacancy', $data);
            $this->load->view('templates/footer'); 
    }

    public function deleteJobVacancy()
    {
        $id = $this->uri->segment(3);

        $result = $this->Personalia_model->deleteJobVacancy($id);


       if ($result > 0) {
            $this->session->set_flashdata('message', 'Has Been Deleted');
            // $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Deleted');
            }
            redirect('personalia/jobvacancy');

    }
}