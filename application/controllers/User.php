<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
	}

	public function register()
	{
		if ($this->input->post()) {
			$data = [
				'name' => $this->input->post('name'),
				'surname' => $this->input->post('surname'),
				'login' => $this->input->post('login'),
				'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
			];
			$this->User_model->register($data);
			redirect('user/login');
		}
		$this->load->view('user/register');
	}

	public function login()
	{
		if ($this->input->post()) {
			$login = $this->input->post('login');
			$password = $this->input->post('password');

			$user = $this->User_model->get_user_by_login($login);
			if ($user && password_verify($password, $user['password'])) {
				$this->session->set_userdata('user', $user); // Store user details in the session
				$this->session->set_userdata('logged_in', true); // Add a flag for logged-in status
				redirect('tasks');
			} else {
				$this->session->set_flashdata('error', 'Invalid login or password');
			}
		}
		$this->load->view('user/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user/login');
	}
}
