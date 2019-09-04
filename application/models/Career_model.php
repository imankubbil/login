<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Career_model extends CI_Model
{
    public function personal_insert()
    {
        $data = [
            'email'     => $this->input->post('email', true),
            'nama'      => $this->input->post('nama', true),
            'panggilan' => $this->input->post('panggilan', true),
            'ktp'       => $this->input->post('ktp', true),
            'kk'        => $this->input->post('kk', true),
            'tempat'    => $this->input->post('tempat', true),
            'ttl'       => $this->input->post('ttl', true),
            'umur'       => $this->input->post('umur', true),
            'gender'    => $this->input->post('gender', true),
            'agama'     => $this->input->post('agama', true),
            'wn'        => $this->input->post('wn', true),
            'telp'      => $this->input->post('telp', true),
            'alamat'    => $this->input->post('alamat', true)
        ];

        return $this->db->insert('personal', $data);
    }

    public function personal_update()
    {
        $data = [
            'nama'      => $this->input->post('nama', true),
            'panggilan' => $this->input->post('panggilan', true),
            'ktp'       => $this->input->post('ktp', true),
            'kk'        => $this->input->post('kk', true),
            'tempat'    => $this->input->post('tempat', true),
            'ttl'       => $this->input->post('ttl', true),
            'umur'       => $this->input->post('umur', true),
            'gender'    => $this->input->post('gender', true),
            'agama'     => $this->input->post('agama', true),
            'wn'        => $this->input->post('wn', true),
            'telp'      => $this->input->post('telp', true),
            'alamat'    => $this->input->post('alamat', true)
        ];

        $this->db->where('email', $this->input->post('email'));
        return $this->db->update('personal', $data);
    }

    public function education_insert()
    {
        $data = [
            'email'     => $this->input->post('email', true),
            'jenjang'     => $this->input->post('jenjang', true),
            'tempat'      => $this->input->post('tempat', true),
            'nilai'      => $this->input->post('nilai', true),
            'jurusan'     => $this->input->post('jurusan', true),
            'tahun_lulus' => $this->input->post('tahun_lulus', true)
        ];

        return $this->db->insert('education', $data);
    }

    public function education_update()
    {
        $data = [
            'jenjang'     => $this->input->post('jenjang', true),
            'tempat'      => $this->input->post('tempat', true),
            'nilai'      => $this->input->post('nilai', true),
            'jurusan'     => $this->input->post('jurusan', true),
            'tahun_lulus' => $this->input->post('tahun_lulus', true)
        ];
        // print_r($data);
        // die();
        $id = $this->input->post('id_education', true);
        $this->db->where('id_education', $id);
        return $this->db->update('education', $data);
    }

    public function work_insert()
    {
        
        $data = [
            [
                'email' => $this->input->post('email1', true),
                'nama_perusahaan' => $this->input->post('nama_perusahaan1', true),
                'awal_kerja' => $this->input->post('awal_kerja1', true),
                'akhir_kerja' => $this->input->post('akhir_kerja1', true),
                'jabatan' => $this->input->post('jabatan1', true),
                'gaji' => $this->input->post('gaji1', true),
                'alasan_pindah' => $this->input->post('alasan_pindah1', true),
                'job_desk' => $this->input->post('job_desk1', true)
            ],


            [
                'email' => $this->input->post('email', true),
                'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
                'awal_kerja' => $this->input->post('awal_kerja', true),
                'akhir_kerja' => $this->input->post('akhir_kerja', true),
                'jabatan' => $this->input->post('jabatan', true),
                'gaji' => $this->input->post('gaji', true),
                'alasan_pindah' => $this->input->post('alasan_pindah', true),
                'job_desk' => $this->input->post('job_desk', true)
            ]

        ];

        if ($data[1]['email'] == "") {
            return $this->db->insert('work_history', $data[0]);
        } else {
            return $this->db->insert_batch('work_history', $data);
        }

    }

    public function work_update()
    {
          $data = [
            [
                'id_workhistory' => $this->input->post('id_workhistory1', TRUE),
                'email' => $this->input->post('email1', true),
                'nama_perusahaan' => $this->input->post('nama_perusahaan1', true),
                'awal_kerja' => $this->input->post('awal_kerja1', true),
                'akhir_kerja' => $this->input->post('akhir_kerja1', true),
                'jabatan' => $this->input->post('jabatan1', true),
                'gaji' => $this->input->post('gaji1', true),
                'alasan_pindah' => $this->input->post('alasan_pindah1', true),
                'job_desk' => $this->input->post('job_desk1', true)
            ],


            [
                'id_workhistory' => $this->input->post('id_workhistory2', TRUE),
                'email' => $this->input->post('email2', true),
                'nama_perusahaan' => $this->input->post('nama_perusahaan2', true),
                'awal_kerja' => $this->input->post('awal_kerja2', true),
                'akhir_kerja' => $this->input->post('akhir_kerja2', true),
                'jabatan' => $this->input->post('jabatan2', true),
                'gaji' => $this->input->post('gaji2', true),
                'alasan_pindah' => $this->input->post('alasan_pindah2', true),
                'job_desk' => $this->input->post('job_desk2', true)
            ]

        ];
        // $email = $this->input->post('email1', true);
        // $this->db->where('email', $email);
        return $this->db->update_batch('work_history', $data,'id_workhistory');

    }

    public function family_insert()
    {
        $data = [
            'email' => $this->input->post('email', true),
            'status_pernikahan' => $this->input->post('inlineRadioOptions', true),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu', true),
            'saudara_kandung' => $this->input->post('saudara_kandung', true),
            'nama_pasangan' => $this->input->post('nama_pasangan', true),
            'jumlah_anak' => $this->input->post('jumlah_anak', true)
        ];
        return $this->db->insert('family_data', $data);
    }

    public function family_update()
    {
        $data = [
            'status_pernikahan' => $this->input->post('inlineRadioOptions', true),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu', true),
            'saudara_kandung' => $this->input->post('saudara_kandung', true),
            'nama_pasangan' => $this->input->post('nama_pasangan', true),
            'jumlah_anak' => $this->input->post('jumlah_anak', true)
        ];

        $id = $this->input->post('id_family', true);
        $this->db->where('id_family', $id);
        return $this->db->update('family_data', $data);
    }

    public function self_insert()
    {
        $data = [
            'email' => $this->input->post('email', true),
            'cita_cita' => $this->input->post('cita_cita', true),
            'motto' => $this->input->post('motto', true),
            'organisasi' => $this->input->post('organisasi', true),
            'hobby' => $this->input->post('hobby', true),
            'kelebihan' => $this->input->post('kelebihan', true),
            'kekurangan' => $this->input->post('kekurangan', true),
        ];

        return $this->db->insert('self_concept', $data);
    }

    public function self_update()
    {
        $data = [
            
            'cita_cita' => $this->input->post('cita_cita', true),
            'motto' => $this->input->post('motto', true),
            'organisasi' => $this->input->post('organisasi', true),
            'hobby' => $this->input->post('hobby', true),
            'kelebihan' => $this->input->post('kelebihan', true),
            'kekurangan' => $this->input->post('kekurangan', true),
        ];


        $id = $this->input->post('id_concept', true);
        $this->db->where('id_concept', $id);
        return $this->db->update('self_concept', $data);
    }

    // public function upload_insert()
    // {
    //     $data = [
    //         'email' => $this->input->post('email', true),
    //         'no_ktp' => $this->input->post('no_ktp', true),
    //         'foto_ktp' => $this->input->post('foto_ktp', true),
    //         'no_ijazah' => $this->input->post('no_ijazah', true),
    //         'foto_ijazah' => $this->input->post('foto_ijazah', true),
    //         'no_npwp' => $this->input->post('no_npwp', true),
    //         'foto_npwp' => $this->input->post('foto_npwp', true),
    //         'skck' => $this->input->post('skck', true),
    //         'foto_skck' => $this->input->post('foto_skck', true),
    //         'sertifikat' => $this->input->post('sertifikat', true),
    //         'foto_sertifikat' => $this->input->post('foto_sertifikat', true),
    //         'foto_transkrip' => $this->input->post('foto_transkrip', true)
    //     ];

    //     // cek jika ada gambar yang diupload
    //         $upload = $_FILES['foto_ktp']['name'];
    //         var_dump($upload);
    //         die;

    //         if ($upload) {
    //             $config['allowed_types'] = 'jpeg|jpg|png';
    //             $config['max_size'] = '2048';
    //             $config['upload_path'] = './assets/img/upload/';

    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image')) {
    //                 $old_image = $data['user']['image'];
    //                 if ($old_image != 'default.jpg') {
    //                     unlink(FCPATH . 'assets/img/upload/' . $old_image);
    //                 }

    //                 $new_image = $this->upload->data('file_name');
    //                 $this->db->set('image', $new_image);
    //             } else {
    //                 echo $this->upload->display_errors();
    //             }
    //         }
    // }
}
