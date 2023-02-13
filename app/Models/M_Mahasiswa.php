<?php
 
namespace App\Models;
 
use CodeIgniter\Model as CodeIgniterModel;
 
class M_Mahasiswa extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'NIM';
    protected $allowedFields = ['NIM', 'Nama', 'Usia'];
 
    public function getAll()
    {
 
        $sql = "SELECT * FROM mahasiswa";
 
        // eksekusi sql di atas
        $db = db_connect();
        $data = $db->query("SELECT * FROM {$this->table}");
 
        // return by array
        return $data->getResultArray();
    }



    public function __construct()
    {
        $this->db = db_connect();
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
}