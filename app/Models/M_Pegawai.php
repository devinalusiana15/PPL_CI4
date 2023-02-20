<?php
 
namespace App\Models;
 
use CodeIgniter\Model as CodeIgniterModel;
 
class M_Pegawai extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'pegawai';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama', 'gender', 'telp', 'email', 'pendidikan'];
 
    public function getAll()
    {
 
        $sql = "SELECT * FROM pegawai";
 
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
 
    public function pegawai_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (nim, nama, gender, telp, email, pendidikan) VALUES ('{$data['nim']}', '{$data['nama']}', '{$data['gender']}', '{$data['telp']}', '{$data['email']}','{$data['pendidikan']}')");
    }

    public function getPegawai($nim)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE nim = '{$nim}'");
        $this->db->close();
        return $data->getRowArray();
    }

 
}