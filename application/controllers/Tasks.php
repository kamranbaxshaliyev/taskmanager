<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tasks extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Task_model');
	}

	public function index()
	{
		$data['tasks'] = $this->Task_model->get_all_tasks();
		$this->load->view('tasks/index', $data);
	}

	public function create()
	{
		$this->load->view('tasks/create');
	}

	public function store()
	{
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'due_date' => $this->input->post('due_date'),
		];
		$this->Task_model->create_task($data);
		redirect('tasks');
	}

	public function edit($id)
	{
		$data['task'] = $this->Task_model->get_task($id);
		$this->load->view('tasks/edit', $data);
	}

	public function update($id)
	{
		$data = [
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'due_date' => $this->input->post('due_date'),
		];
		$this->Task_model->update_task($id, $data);
		redirect('tasks');
	}

	public function delete($id)
	{
		$this->Task_model->delete_task($id);
		redirect('tasks');
	}
}
