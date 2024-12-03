<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function register($data)
	{
		return $this->db->insert('users', $data);
	}

	public function login($login, $password)
	{
		$user = $this->db->where('login', $login)->get('users')->row_array();

		if ($user && password_verify($password, $user['password']))
		{
			return $user;
		}

		return false;
	}

	public function get_user_by_login($login)
	{
		return $this->db->where('login', $login)->get('users')->row_array();
	}

	public function check_login_exists($login)
	{
		$query = $this->db->where('login', $login)->get('users');

		return $query->num_rows() > 0;
	}
}
