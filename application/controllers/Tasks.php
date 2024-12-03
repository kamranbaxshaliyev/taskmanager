<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tasks extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Task_model');

		// Check if the user is logged in
		if (!$this->session->userdata('logged_in'))
		{
			redirect('user/login');
		}
	}

	public function index()
	{
		$user_id = $this->session->userdata('user')['id'];
		$data['tasks'] = $this->Task_model->get_all_tasks_by_user($user_id);
		$this->load->view('tasks/index', $data);
	}

	public function create()
	{
		$this->load->view('tasks/create');
	}

	public function store()
	{
		$user_id = $this->session->userdata('user')['id'];
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'due_date' => $this->input->post('due_date'),
			'user_id' => $user_id,
		];
		$this->Task_model->create_task($data);
		redirect('tasks');
	}

	public function edit($id)
	{
		$user_id = $this->session->userdata('user')['id'];
		$data['task'] = $this->Task_model->get_task($id, $user_id);
		$this->load->view('tasks/edit', $data);
	}

	public function update($id)
	{
		$user_id = $this->session->userdata('user')['id'];
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'due_date' => $this->input->post('due_date'),
		];
		$this->Task_model->update_task($id, $data, $user_id);
		redirect('tasks');
	}

	public function delete($id)
	{
		$user_id = $this->session->userdata('user')['id'];
		$this->Task_model->delete_task($id, $user_id);
		redirect('tasks');
	}

	public function search()
	{
		$user_id = $this->session->userdata('user')['id'];
		$searchTerm = $this->input->get('query');
		$dueDate = $this->input->get('due_date');

		if (empty($searchTerm) && empty($dueDate)) {
			$data['tasks'] = $this->Task_model->get_all_tasks_by_user($user_id);
		} else {
			$data['tasks'] = $this->Task_model->search_tasks($user_id, $searchTerm, $dueDate);
		}

		if ($data['tasks'] === false) {
			show_error('Error fetching tasks data from the database.');
		}
		$this->load->view('tasks/task_rows', $data);
	}
}
