<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
	public function get_all_tasks()
	{
		return $this->db->get('tasks')->result_array();
	}

	public function create_task($data)
	{
		return $this->db->insert('tasks', $data);
	}

	public function get_task($id)
	{
		return $this->db->where('id', $id)->get('tasks')->row_array();
	}

	public function update_task($id, $data)
	{
		return $this->db->where('id', $id)->update('tasks', $data);
	}

	public function delete_task($id)
	{
		return $this->db->where('id', $id)->delete('tasks');
	}

	public function search_tasks($searchTerm = null, $dueDate = null)
	{
		try {
			if ($searchTerm) {
				$this->db->like('name', $searchTerm);
			}

			if ($dueDate) {
				$this->db->where('due_date', $dueDate);
			}

			$query = $this->db->get('tasks');

			if (!$query) {
				throw new Exception('Database query failed.');
			}

			return $query->result_array();
		} catch (Exception $e) {
			log_message('error', 'Search tasks error: ' . $e->getMessage());
			return false;
		}
	}
}
