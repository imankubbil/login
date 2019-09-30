<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('career_model');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Apply a Job';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['personal']   = $this->db->get_where('personal', ['email' => $this->session->userdata('email')])->num_rows();
        $data['education']   = $this->db->get_where('education', ['email' => $this->session->userdata('email')])->num_rows();
        $data['work_history']   = $this->db->get_where('work_history', ['email' => $this->session->userdata('email')])->num_rows();
        $data['family']   = $this->db->get_where('family_data', ['email' => $this->session->userdata('email')])->num_rows();
        $data['concept']   = $this->db->get_where('self_concept', ['email' => $this->session->userdata('email')])->num_rows();
        $data['user_answer'] = $this->db->get_where('user_answer', ['email' => $this->session->userdata('email')])->num_rows();
        $data['upload'] = $this->db->get_where('upload_file', ['email' => $this->session->userdata('email')])->num_rows();

        $data['cek_data'] = $data['personal']+$data['education']+$data['work_history']+$data['family']+$data['concept']+$data['upload'];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('career/index', $data);
        $this->load->view('templates/footer');
        // $this->_cekData(); 

    }

    public function cekData()
    {
        $data['personal'] = $this->db->get_where('personal', array("email" => $this->session->userdata('email')))->row_array();
        echo json_encode($data);
    }

    public function cekEdu()
    {
        $data['education'] = $this->db->get_where('education', ["email" => $this->session->userdata('email')])->row_array();
        echo json_encode($data);
    }

    public function personal()
    {
        $data['title'] = 'Form Personal Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        // $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('panggilan', 'Panggilan', 'required');
        $this->form_validation->set_rules('ktp', 'KTP', 'required');
        $this->form_validation->set_rules('kk', 'Kartu keluarga', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        // $this->form_validation->set_rules('gender', 'Gender', 'require_dropdown[select]');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('wn', 'Warga negara', 'required');
        $this->form_validation->set_rules('telp', 'No telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/personal', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->personal_insert();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function personalEdit()
    {
        $data['title'] = 'Form Edit Personal Data';
        // $id = $this->uri->segment(3);


        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['personal'] = $this->db->get_where('personal', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('panggilan', 'Panggilan', 'required');
        $this->form_validation->set_rules('ktp', 'KTP', 'required');
        $this->form_validation->set_rules('kk', 'Kartu keluarga', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('ttl', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('wn', 'Warga negara', 'required');
        $this->form_validation->set_rules('telp', 'No telp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/personal-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->personal_update();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('career');
        }
    }

    public function education()
    {
        $data['title'] = 'Form Education Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        // echo 'Selamat Datang ' . $data['user']['name'];

        // $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('jenjang', 'Jenjang  ', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun lulus', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/education', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->education_insert();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function educationEdit()
    {
        $data['title'] = 'Form Edit Education Data';
        // $id = $this->uri->segment(3);


        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['education'] = $this->db->get_where('education', array("email" => $this->session->userdata('email')))->row_array();
        // print_r($data);
        // die();

        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun lulus', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/education-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->education_update();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('career');
        }
    }

    public function workHistory()
    {

        $data['title'] = 'Form Work History';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('email1', 'Email', 'required');
        $this->form_validation->set_rules('nama_perusahaan1', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('awal_kerja1', 'Awal Kerja', 'required');
        $this->form_validation->set_rules('akhir_kerja1', 'Akhir Kerja', 'required');
        $this->form_validation->set_rules('jabatan1', 'Jabatan', 'required');
        $this->form_validation->set_rules('gaji1', 'Gaji', 'required');
        $this->form_validation->set_rules('alasan_pindah1', 'Alasan Pindah', 'required');
        $this->form_validation->set_rules('job_desk1', 'Job Desk', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/work-history', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->work_insert();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function workHistoryEdit()
    {
        $data['title'] = 'Form Edit Work History';
        // $id = $this->uri->segment(3);


        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['work_history'] = $this->db->get_where('work_history', array("email" => $this->session->userdata('email')))->result_array();

        $this->form_validation->set_rules('nama_perusahaan1', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('awal_kerja1', 'Awal Kerja', 'required');
        $this->form_validation->set_rules('akhir_kerja1', 'Akhir Kerja', 'required');
        $this->form_validation->set_rules('jabatan1', 'Jabatan', 'required');
        $this->form_validation->set_rules('gaji1', 'Gaji', 'required');
        $this->form_validation->set_rules('alasan_pindah1', 'Alasan Pindah', 'required');
        $this->form_validation->set_rules('job_desk1', 'Job Desk', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/work-history-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->work_update();
           if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('career');
        }
    }

    public function familyData()
    {
        $data['title'] = 'Form Family Data';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        // $this->form_validation->set_rules('status_pernikahan', 'Status Pernikahan', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/family-data', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->family_insert();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function familyEdit()
    {
        $data['title'] = 'Form Edit Family Data';
        // $id = $this->uri->segment(3);


        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['family_data'] = $this->db->get_where('family_data', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/family-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->family_update();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('career');
        }
    }

    public function selfConcept()
    {
        $data['title'] = 'Form Self Concept';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('cita_cita', 'Cita cita', 'required');
        $this->form_validation->set_rules('motto', 'Motto', 'required');
        $this->form_validation->set_rules('organisasi', 'Organisasi', 'required');
        $this->form_validation->set_rules('hobby', 'Hobby', 'required');
        $this->form_validation->set_rules('kelebihan', 'Kelebihan', 'required');
        $this->form_validation->set_rules('kekurangan', 'kekurangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/self-concept', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->self_insert();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Sent');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function selfEdit()
    {
        $data['title'] = 'Form Edit Self Concept';
        // $id = $this->uri->segment(3);


        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['self_concept'] = $this->db->get_where('self_concept', array("email" => $this->session->userdata('email')))->row_array();

        $this->form_validation->set_rules('cita_cita', 'Cita cita', 'required');
        $this->form_validation->set_rules('motto', 'Motto', 'required');
        $this->form_validation->set_rules('organisasi', 'Organisasi', 'required');
        $this->form_validation->set_rules('hobby', 'Hobby', 'required');
        $this->form_validation->set_rules('kelebihan', 'Kelebihan', 'required');
        $this->form_validation->set_rules('kekurangan', 'kekurangan', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/self-concept-edit', $data);
            $this->load->view('templates/footer');
        } else {
            $result = $this->career_model->self_update();
            if ($result > 0) {
                $this->session->set_flashdata('message', 'Has Been Updated');
                $this->session->set_flashdata('show', 'tampil data edit');
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Updated');
            }
            redirect('career');
        }
    }

    public function uploadFile()
    {
        $data['title'] = 'Upload File';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
       
        $this->form_validation->set_rules('sertifikat', 'Sertifikat', 'required|trim');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/upload_file', $data);
            $this->load->view('templates/footer');
        } else {
            $data_insert = [
                'email' => $this->input->post('email', true),
                'sertifikat' => $this->input->post('sertifikat', true),
                'foto_ktp' => str_replace(' ', '_', $_FILES['foto_ktp']['name']),
                'foto_ijazah' => str_replace(' ', '_', $_FILES['foto_ijazah']['name']),
                'foto_sertifikat' => str_replace(' ', '_', $_FILES['foto_sertifikat']['name']),
                'foto_transkrip_nilai' => str_replace(' ', '_', $_FILES['foto_transkrip_nilai']['name'])
            ];

            $file_name = $this->multiple_upload($_FILES['foto_ktp']['tmp_name']);
            $file_name = $this->multiple_upload($_FILES['foto_ijazah']['tmp_name']);
            $file_name = $this->multiple_upload($_FILES['foto_sertifikat']['tmp_name']);
            $file_name = $this->multiple_upload($_FILES['foto_transkrip_nilai']['tmp_name']);
        
            $this->db->insert('upload_file', $data_insert);
            $this->session->set_flashdata('message', 'file has been sent');
            
            redirect('career');

        }

    }

    function multiple_upload(){
        $this->data['notification'] = '';
         $config['upload_path']   = './assets/img/upload'; 
         $config['allowed_types'] = 'jpg|png|jpeg'; 
         $config['max_size']      = 2048;
         $config['overwrite']     = true; 

         $this->load->library('upload', $config);
         $file_name['name'] = $this->do_upload('foto_ktp');
         $file_name['name'] = $this->do_upload('foto_ijazah');
         $file_name['name'] = $this->do_upload('foto_sertifikat');
         $file_name['name'] = $this->do_upload('foto_transkrip_nilai');

         return $file_name;
    }

    function do_upload($file){
        if (!$this->upload->do_upload($file)) {
            return $this->data['notification'] .= $this->upload->display_errors();
        } else {
            $upload_data = $this->upload->data();
            return $this->data['notification'] .= $upload_data['file_name']."|";
        }
    }

    public function uploadEdit()
    {
        $data['title'] = 'Upload File Edit';
        // untuk mengambil data dari session yang masuk
        $data['user'] = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['upload_file'] = $this->db->get_where('upload_file', array("email" => $this->session->userdata('email')))->row_array();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('career/upload_file_edit', $data);
            $this->load->view('templates/footer');

    }

    public function exam()
    {
        $get_access = ucwords($this->uri->segment(1));

        $data['title']          = 'Psikotest Examination';
        $data['user']           = $this->db->get_where('user', array("email" => $this->session->userdata('email')))->row_array();
        $data['question']       = $this->db->get('question')->result_array();
        $data['count_question'] = count($data['question']);
        $data['access_menu']    = $this->db->get_where('user_menu', ['menu' => $get_access])->row_array()['id'];
        $data['waktu']          = $data['count_question']*120;

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('count', 'Count', 'trim|required');
        for ($i=1; $i <= $data['count_question']; $i++) { 
            $field = $i."-jawaban";
            $this->form_validation->set_rules($field, $field, 'trim');
        }
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('psikotest/exam-view', $data);
            $this->load->view('templates/footer');
        } else {
            $count = $this->input->post('count', TRUE);

            $data_get_submit = [];
            for ($i=1; $i <= $count ; $i++) { 
                $name_post = $i.'-jawaban';
                $data_input = $this->input->post($name_post, TRUE);
                if ($data_input != "") {
                    $implode = explode("-", $data_input);
                    $data_get_submit[$i-1]['email']         = $this->input->post('email', TRUE);
                    $data_get_submit[$i-1]['id_answer']     = $implode[0];
                    $data_get_submit[$i-1]['id_question']   = $implode[1];
                    $data_get_submit[$i-1]['urutan']        = $implode[2];
                } else {
                    $data_get_submit[$i-1]['email']         = $this->input->post('email', TRUE);
                    $data_get_submit[$i-1]['id_answer']     = "";
                    $data_get_submit[$i-1]['id_question']   = "";
                    $data_get_submit[$i-1]['urutan']        = "";
                }
            }
            
            $jumlah_benar = 0;
            foreach($data_get_submit as $jml){
                $jumlah_benar = $jumlah_benar + (int)get_status($jml['id_answer'], $jml['id_question'], $jml['urutan']);
            }

            $nilai = ($jumlah_benar / $count) * 100;

            $result = $this->career_model->insert_user_answer($data_get_submit);
            if ($result > 0) {
                $data_insert_user_psikotest = [
                    'email' => $this->input->post('email', TRUE),
                    'nilai_psikotest' => floor($nilai),
                    'waktu_test'    => date('Y-m-d')
                ];

                $result_insert = $this->db->insert('user_psikotest', $data_insert_user_psikotest);
                if ($result_insert > 0) {
                    $this->session->set_flashdata('message', 'Has Been Sent');
                } else {
                    $this->session->set_flashdata('message', 'Has Not Been Sent');
                }
            } else {
                $this->session->set_flashdata('message', 'Has Not Been Sent');
            }
            redirect('career');
        }
    }

    public function submit_countdown_exam() 
    {
        $count = $this->input->post('count', TRUE);

            $data_get_submit = [];
            for ($i=1; $i <= $count ; $i++) { 
                $name_post = $i.'-jawaban';
                $data_input = $this->input->post($name_post, TRUE);
                if ($data_input != "") {
                    $implode = explode("-", $data_input);
                    $data_get_submit[$i-1]['email']         = $this->input->post('email', TRUE);
                    $data_get_submit[$i-1]['id_answer']     = $implode[0];
                    $data_get_submit[$i-1]['id_question']   = $implode[1];
                    $data_get_submit[$i-1]['urutan']        = $implode[2];
                } else {
                    $implode = explode("-", $data_input);
                    $data_get_submit[$i-1]['email']         = $this->input->post('email', TRUE);
                    $data_get_submit[$i-1]['id_answer']     = "";
                    $data_get_submit[$i-1]['id_question']   = "";
                    $data_get_submit[$i-1]['urutan']        = "";
                }
            }
        
            $result = $this->career_model->insert_user_answer($data_get_submit);
            if ($result > 0) {
                echo 1;
            } else {
                echo 0;
            }
    }
}
