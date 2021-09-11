<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		//create users table
		$this->forge->addField([
			'id' => [
				'type' => 'int',
				'constraint' => 5,
				'unassigned' => true,
				'auto_increment' => true,
				'null' => false
			],

			'fname' => [
				'type' => 'varchar',
				'constraint' => 12,
				'null' => true
			],

			'mname' => [
				'type' => 'varchar',
				'constraint' => 12,
				'null' => true
			],

			'lname' => [
				'type' => 'varchar',
				'constraint' => 12,
				'null' => true
			],
			
			'uname' => [
				'type' => 'varchar',
				'constraint' => 12,
				'null' => true
			],

			'upass' => [
				'type' => 'varchar',
				'constraint' => 12,
				'null' => true
			],

			'isActive' => [],
			'created_at datetime default current_timestamp'
			

		]);
		$this->forge->addKey('id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		//
	}
}
