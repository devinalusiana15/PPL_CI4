<?php
 
namespace App\Models;
 
use CodeIgniter\Model as CodeIgniterModel;
 
class M_Mahasiswa extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'Nama', 'Usia'];
    protected $beforeInsert = ['hashPassword'];


    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll()
    {
        $data = $this->db->query("SELECT * FROM {$this->table}");
 
        // return by array
        return $data->getResultArray();
    }
 
    public function mahasiswa_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (NIM, Nama, Umur) VALUES ('{$data['NIM']}', '{$data['Nama']}', '{$data['Umur']}')");
    }

    public function getMahasiswa($nim)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE nim = '{$nim}'");
        $this->db->close();
        return $data->getRowArray();
    }

    public function deleteMahasiswa($nim)
    {
        return $this->db->query("DELETE FROM {$this->table} WHERE nim = '{$nim}'");
        
    }

    public function mahasiswa_update($data, $nim)
    {
        return $this->db->query("UPDATE {$this->table} SET  Nama = '{$data['Nama']}', Umur = '{$data['Umur']}' WHERE NIM = '{$nim}'");
    }

    public function hashPassword(array $data)
    {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function mahasiswaSearch($keyword)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE nim LIKE '%{$keyword}%' OR nama LIKE '%{$keyword}%' OR umur LIKE '%{$keyword}%'");
        $this->db->close();
        return $data->getResultArray();
    }
}