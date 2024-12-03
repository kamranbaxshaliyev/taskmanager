<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Task_model extends CI_Model
{
	public function get_all_tasks_by_user($user_id)
	{
		return $this->db->where('user_id', $user_id)->get('tasks')->result_array();
	}

	public function create_task($data)
	{
		return $this->db->insert('tasks', $data);
	}

	public function get_task($id, $user_id)
	{
		return $this->db->where('id', $id)->where('user_id', $user_id)->get('tasks')->row_array();
	}

	public function update_task($id, $data, $user_id)
	{
		return $this->db->where('id', $id)->where('user_id', $user_id)->update('tasks', $data);
	}

	public function delete_task($id, $user_id)
	{
		return $this->db->where('id', $id)->where('user_id', $user_id)->delete('tasks');
	}

	public function search_tasks($user_id, $searchTerm = null, $dueDate = null)
	{
		try
		{
			$this->db->where('user_id', $user_id);

			if ($searchTerm)
			{
				$this->db->like('name', $searchTerm);
			}

			if ($dueDate)
			{
				$this->db->where('due_date', $dueDate);
			}

			$query = $this->db->get('tasks');

			if (!$query)
			{
				throw new Exception('Database query failed.');
			}

			return $query->result_array();
		}
		catch (Exception $e)
		{
			log_message('error', 'Search tasks error: ' . $e->getMessage());

			return false;
		}
	}
}
