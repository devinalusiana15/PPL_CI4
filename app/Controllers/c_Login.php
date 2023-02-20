<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Login;

class c_Login extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Login();
    }

    public function index()
    {
        return view('v_login');
    }

    public function cek_login()
    {
        $model = new M_Login();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->findByUsername($username);
        $pass = $model->verifyPassword($password, $user['password']);

        if (!$user || !$pass) {
            return redirect()->to('/')->with('error', 'Username atau Password salah');
        }

        session()->set('username', $user['username']);
        session()->set('password', $user['password']);
        session()->set('isLoggedIn', true);
        return redirect()->to('/home');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
