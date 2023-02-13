<?php
 
namespace App\Models;
 
use CodeIgniter\Model as CodeIgniterModel;
 
class M_Login extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'NIM', 'Username', 'Password'];

    public function cek_login($username, $password)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE username = '{$username}' AND password = '{$password}'");
        $this->db->close();
        return $data->getRowArray();
    }
}