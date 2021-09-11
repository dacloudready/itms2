<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDevicesTable extends Migration
{
	public function up()
	{
		//
		$this->forge->createTable('devices');
	}

	public function down()
	{
		//
	}
}
