<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{
	public function index()
	{
		$this->load->library('migration');

		if ($this->migration->latest() === FALSE)
			show_error($this->migration->error_string());
		else
			echo 'Migrations applied successfully.';
	}

	public function seed()
	{
		$data = [
			['name' => 'John', 'surname' => 'Doe', 'login' => 'john', 'password' => password_hash('12345', PASSWORD_DEFAULT)],
			['name' => 'Jane', 'surname' => 'Smith', 'login' => 'jane', 'password' => password_hash('67890', PASSWORD_DEFAULT)]
		];

		$this->db->insert_batch('users', $data);
		echo 'Database seeded successfully.';
	}
}

