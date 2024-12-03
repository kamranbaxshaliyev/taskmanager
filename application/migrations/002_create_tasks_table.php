<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_tasks_table extends CI_Migration
{
	public function up()
	{
		// Create tasks table
		$this->dbforge->add_field([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'description' => [
				'type' => 'TEXT',
				'null' => TRUE,
			],
			'due_date' => [
				'type' => 'DATE',
				'null' => FALSE,
			],
			'user_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'null' => FALSE,
			]
		]);

		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_field('CONSTRAINT FOREIGN KEY (user_id) REFERENCES users(id)');
		$this->dbforge->create_table('tasks');
	}

	public function down()
	{
		// Drop tasks table
		$this->dbforge->drop_table('tasks');
	}
}
