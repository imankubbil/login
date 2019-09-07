<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Personalia_model extends CI_Model
{
	public function getData()
	{
		$query = "SELECT personal.*, education.*, user_psikotest.* FROM personal LEFT JOIN education ON personal.email = education.email LEFT JOIN user_psikotest ON education.email = user_psikotest.email ORDER BY id_personal ASC
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

		// $query = "SELECT * FROM question LEFT JOIN answer ON question.id_question = answer.id_question WHERE answer.status = 1 ORDER BY question.id_question DESC
		// ";
		// return $this->db->query($query)->result_array();

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
}