<?php

namespace App\Models;

use CodeIgniter\Model;

class A_Pencocokan extends Model
{
    protected $table = 'pencocokan';

    public function __construct()
    {

        $this->db = db_connect();
        $this->builder = $this->db->table($this->table);
    }

    public function getAllData()
    {
        return $this->db->table('pencocokan')->get()->getResultArray();
    }

    public function tambah($data)
    {
        return $this->db->table('pencocokan')->insert($data);
    }
    public function hapus($id_pencocokan)
    {
        return $this->db->table('pencocokan')->delete(['id_pencocokan' => $id_pencocokan]);
    }
    public function ubah($data, $id_pencocokan)
    {
        return $this->builder->update($data, ['id_pencocokan' => $id_pencocokan]);
    }
}
