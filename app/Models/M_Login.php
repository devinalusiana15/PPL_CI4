<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;

class M_Login extends CodeIgniterModel
{
    protected $model;
    protected $table      = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_user', 'NIM', 'username', 'password'];

    public function verifyPassword($password, string $hash)
    {
        return password_verify($password, $hash);
    }

    public function findByUsername($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
