<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'nip' => [
				'type' => 'varchar',
				'constraint' => 15,
				'unique' => true
			],
			'nama' => [
				'type' => 'varchar',
				'constraint' => 255
			],
			'alamat' => [
				'type' => 'text'
			]
		]);

		$this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mahasiswa');
	}
}
