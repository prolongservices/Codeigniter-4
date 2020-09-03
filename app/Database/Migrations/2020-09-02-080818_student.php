<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 50
			],
			'age' => [
				'type' => 'INT',
				'constraint' => 5
			],
			'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
		]);

		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('students');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('students');
	}
}
