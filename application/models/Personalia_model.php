<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personalia_model extends CI_Model
{
	public function getData()
	{
		$query = "SELECT personal.*, education.*, user_jobvacancy.*, user.*, user_psikotest.* FROM personal LEFT JOIN education ON personal.email = education.email LEFT JOIN user_psikotest ON education.email = user_psikotest.email LEFT JOIN user_jobvacancy ON personal.email = user_jobvacancy.email LEFT JOIN user ON personal.email = user.email WHERE user.role_id !=1 ORDER BY id_personal DESC
		";


		return $this->db->query($query)->result_array();
	}


	public function addPsikotest($name)
	{
		$data_pertanyaan = [
			'question' 		=> $this->input->post('pertanyaan', TRUE),
			'name'			=> $name,
			'date_created'	=> date('Y-m-d')
		];

		$result_insert_pertanyaan = $this->db->insert('question', $data_pertanyaan);
		$id_question = $this->db->insert_id();
		if ($result_insert_pertanyaan > 0) {
			$satu = $this->input->post('satu', TRUE);
			$dua  = $this->input->post('dua', TRUE);
			$tiga = $this->input->post('tiga', TRUE);
			$empat= $this->input->post('empat', TRUE);
			$lima = $this->input->post('lima', TRUE);

			$data_jawaban = [$satu, $dua, $tiga, $empat, $lima];

			$data_insert_jawaban = [];
			$data_status = $this->input->post('a[]', TRUE)[0];
			$status = "";
			$i = 0;
			$urutan = ['A', 'B', 'C', 'D', 'E'];
			foreach ($data_jawaban as $jawaban) {
				if ($urutan[$i] == $data_status) {
					$status = 1;
				} else {
					$status = 0;
				}
				$data_insert_jawaban[$i]['id_question'] = $id_question;
				$data_insert_jawaban[$i]['jawaban']	= $jawaban;
				$data_insert_jawaban[$i]['urutan']	= $urutan[$i];
				$data_insert_jawaban[$i]['status']	= $status;
				$i++;
			}

			$result_insert_jawaban = $this->db->insert_batch('answer', $data_insert_jawaban);
			if ($result_insert_jawaban > 0) {
				return 1;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	}

	public function psikotestData()
	{

		$query = $this->db->select('*')->from('question')->join('answer', 'question.id_question = answer.id_question')->where('answer.status', 1)->order_by('question.id_question', 'DESC')->get()->result_array();
		return $query;
	}

	public function getPsikotestById($id)
	{
		$question_by_id = $this->db->select('*')->from('question')->where('id_question', $id)->get()->row_array();
		$answer_by_id_question = $this->db->select('*')->from('answer')->where('id_question', $question_by_id['id_question'])->get()->result_array();
		$data['question'] = $question_by_id['question'];
		$data['answer'] = $answer_by_id_question;

		return $data;

	}

	public function deletePsikotest($id)
	{	
		$this->db->where('id_question', $id);
		$delete_question = $this->db->delete('question');
		if ($delete_question > 0) {
			$this->db->where('id_question', $id);
			$delete_answer = $this->db->delete('answer');
			if ($delete_answer > 0) {
				return 1;
			} else {
				return 0;
			}
		} else {
			return 0;
		}
	}

	public function jobVacancy()
	{
		$data = $this->db->get('job_vacancy')->result_array();
		return $data;
	}

	public function addJobVacancy()
	{
		$data = [

		'job_require'   => $this->input->post('job_require', true),
		'deskripsi'     => $this->input->post('deskripsi', true),
		'created'     => $this->input->post('created', true)

		];

		return $this->db->insert('job_vacancy', $data);
	}

	public function getJobVacancyById($id)
	{
		$data = $this->db->select('*')->from('job_vacancy')->where('id_jobvacancy', $id)->get()->row_array();
		return $data;
	}

	public function deleteJobVacancy($id)
	{
		$this->db->where('id_jobvacancy', $id);
		$data = $this->db->delete('job_vacancy');

		return $data;
	}

	public function editJobVacancy()
	{
		$data = [

		'job_require'   => $this->input->post('job_require', true),
		'deskripsi'     => $this->input->post('deskripsi', true),
		'created'     => $this->input->post('created', true)
		];

		$this->db->where('id_jobvacancy',$this->input->post('id_jobvacancy'));
        return $this->db->update('job_vacancy', $data);
	}


	public function getJobApplicant($id)
	{

		$personal = $this->db->select('*')->from('personal')->where('id_personal', $id)->get()->row_array();

		$allpersonal = $this->db->select('*')->from('personal')->where('id_personal', $personal['id_personal'])->get()->row_array();

		$education = $this->db->select('*')->from('education')->where('email', $personal['email'])->get()->row_array();

		$family_data = $this->db->select('*')->from('family_data')->where('email', $personal['email'])->get()->row_array();

		$work_history = $this->db->select('*')->from('work_history')->where('email', $personal['email'])->get()->result_array();

		$self_concept = $this->db->select('*')->from('self_concept')->where('email', $personal['email'])->get()->row_array();

		$user_psikotest = $this->db->select('*')->from('user_psikotest')->where('email', $personal['email'])->get()->row_array();

		$user_jobvacancy = $this->db->select('*')->from('user_jobvacancy')->where('email', $personal['email'])->get()->row_array();

		$upload_file = $this->db->select('*')->from('upload_file')->where('email', $personal['email'])->get()->row_array();

		$user = $this->db->select('*')->from('user')->where('email', $personal['email'])->get()->row_array();



		$data['personal'] = $personal['id_personal'];
		$data['allpersonal'] = $allpersonal;
		$data['education'] = $education;
		$data['family_data'] = $family_data;
		$data['work_history'] = $work_history;
		$data['self_concept'] = $self_concept;
		$data['user_psikotest'] = $user_psikotest;
		$data['user_jobvacancy'] = $user_jobvacancy;
		$data['upload_file'] = $upload_file;
		$data['user'] = $user;


		return $data;


	}

	public function amount()
	{
		$user = $this->db->where('role_id>', 1)->get('user')->num_rows();
		$user_psikotest = $this->db->where('nilai_psikotest>', 75)->get('user_psikotest')->num_rows();

		$amount['user'] = $user;
		$amount['user_psikotest'] = $user_psikotest;

	
		return $amount;
	}
}