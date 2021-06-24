<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pencocokan extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id_pencocokan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'judul1'    => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'judul2'    => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
			'hasil_pencocokan'    => [
				'type'       => 'VARCHAR',
				'constraint' => '200',
			],
		]);
		$this->forge->addPrimaryKey('id_pencocokan', true);
		$this->forge->createTable('Pencocokan');
	}

	public function down()
	{
		//
		$this->forge->dropTable('Pencocokan');
	}
}
