<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pencocokan extends Seeder
{
	public function run()
	{
		//
		$pencocokan_data = [
			[
				'id_pencocokan' => '1',
				'judul1'    => 'Sepatu Nike Air Jordan',
				'judul2'    => 'Sepatu Nike Air Walk',
				'hasil_pencocokan'    => 'Tidak'
			],
			[
				'id_pencocokan' => '2',
				'judul1'    => 'Tora Bika Gilus Vanila',
				'judul2'    => 'Tora Bika Gilus Mix Vanila',
				'hasil_pencocokan'    => 'Cocok'
			],
			[
				'id_pencocokan' => '3',
				'judul1'    => 'ABC Special Grade',
				'judul2'    => 'ABC Special Grase Cocopandan',
				'hasil_pencocokan'    => 'Cocok'
			]
		];
		foreach ($pencocokan_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Pencocokan')->insert($data);
		}
	}
}
