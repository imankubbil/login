<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$id_jobvacancy = $this->input->post('id_jobvacancy');

		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('id_jobvacancy', 'JobVacancy', 'trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$data['id_jobvacancy'] = $id_jobvacancy;
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// validasinya lolos pindah ke function _login(adalah function privat)
			
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$id_jobvacancy = $this->input->post('id_jobvacancy');
		if ($id_jobvacancy != NULL || $id_jobvacancy != "") {
			$data_insert = [
				'id_jobvacancy'	=> $id_jobvacancy,
				'email'			=> $email,
			];
			$cek_data = $this->db->get_where('user_jobvacancy', ['email' => $email])->num_rows();
			if ($cek_data != 1) {
				$insert_user_job_apply = $this->db->insert('user_jobvacancy', $data_insert);
			}
		}

		// pencarian email pada database
		$user = $this->db->get_where('user', array("email" => $email))->row_array();

		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = array(
						// melihat level apakah user/admin
						"email" => $user['email'],
						"role_id" => $user['role_id']
					);
					$this->session->set_userdata($data);
					//dipilih berdasar role id
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						// diarahkan ke controller user
						redirect('career');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Wrong password!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				This Email has not been activated!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email is not registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.email]',
			array(
				'is_unique' => 'This email has been register!'
			)
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[3]|matches[password2]',
			array(
				'matches' => 'Password not match!',
				'min_length' => 'Password too short!'
			)
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = array(
				"name" => htmlspecialchars($this->input->post('name', true)),
				"email" => htmlspecialchars($email),
				"image" => 'default.jpg',
				"password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				"role_id" => 2,
				"is_active" => 0,
				"date_created" => time()
			);

			// siapkan token
			// $token = base64_encode(random_bytes(32));
			// var_dump(bin2hex($token));
			$token = md5(random_string('numeric', 16));
			$user_token = array(
				'email' => $email,
				'token' => $token,
				'date_created' => time()
			);

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);

			// untuk aktivasi
			$this->_sendEmail($token, $email, 'verify');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation!Please activate your account</div>');
			redirect('auth');
		}
	}

	private function _sendEmail($token, $email, $type)
	{
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'sholehatilekha@gmail.com',
			'smtp_pass' => 'Agustus18081988',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset' 	=> 'utf-8',
			'newline' 	=> "\r\n"
		);

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('no_reply@selma.com', 'Selma By Informa');
		$this->email->to($email);

		if ($type == 'verify') {
			$this->email->subject('Account Verification');
			$this->email->message('Click this link to verify your account : <a href="'. base_url() .'auth/verify?email=' . $email . '&token=' . urlencode($token) . '">Activate</a>');
		} else if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Click this link to reset your password : <a href="'. base_url() .'auth/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Reset Password</a>');
		} else if($type == 'job_application') {
			$this->email->subject('Information Psikotest');
			$data_user = $this->db->select('user.name, user_data_schedule.datetime, user_data_schedule.location')->from('user')->join('user_data_schedule', 'user.email = user_data_schedule.email', 'left')->where('user_data_schedule.email', $email)->get()->row_array();
			$data_information['email'] = $email;
			$data_information['token'] = $token;
			$data_information['data_user'] = $data_user;
			$content = $this->load->view('send_email/information_psikotest', $data_information, TRUE);
			$this->email->message($content);
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', array('email' => $email))->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', array('token' => $token))->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', array('email' => $email));
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' has been activated! Please login
					</div>');
					redirect('auth');
				} else {
					$this->db->delete('user', array('email' => $email));
					$this->db->delete('user_token', array('email' => $email));

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Account activation failed! Token expired.</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Account activation failed! Wrong token.</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Account activation failed! Wrong email.</div>');
			redirect('auth');
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		// $this->session->sess_destroy();

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			You have been logged out!</div>');
		redirect('auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}

	public function forgotPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Forgot Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/forgot-password');
			$this->load->view('templates/auth_footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', array('email' => $email, 'is_active' => 1))->row_array();

			if ($user) {
				$token = md5(random_string('numeric', 16));
				$user_token = array(
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				);
				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, $email, 'forgot');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Please check your email for reset your password!</div>');
				redirect('auth/forgotpassword');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email is not registered or Activated!</div>');
				redirect('auth/forgotpassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', array('email' => $email))->row_array();
		
		if ($user) {
			$user_token = $this->db->get_where('user_token', array('token' => $token))->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Reset password failed! Wrong token</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Reset password failed! Wrong email</div>');
			redirect('auth');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Change Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/change-password');
			$this->load->view('templates/auth_footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			// $this->db->set('password', $password);
			// $this->db->set('email', $email);

			$data_update['password'] = $password;
			$this->db->where('email', $email);
			$this->db->update('user', $data_update);

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Password has been changed! Please Login</div>');
			redirect('auth');
		}
	}

	public function informationPsikotest()
	{
		$email = urldecode($this->uri->segment(3));
		if ($email == NULL || $email == "") {
			redirect('personalia');
		} else {
			$user = $this->db->get_where('user', array('email' => $email, 'is_active' => 1))->row_array();
			if ($user) {
				$token = md5(random_string('numeric', 16));
				$user_token = array(
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				);

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, $email, 'job_application');

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Has been send email</div>');
				redirect('personalia');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Has not been send email</div>');
				redirect('personalia');
			}
		}
	}

	public function information()
	{
		echo "ini information";
	}
}
