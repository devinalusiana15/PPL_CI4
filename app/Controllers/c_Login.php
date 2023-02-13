<?php
 
 namespace App\Controllers;
 use App\Models\M_Login;
 
 class C_Login extends BaseController
 {
    protected $model; 
    public function __construct()
    {
        $this->model = new M_Login();
    }

    public function index()
    {
        return view('v_Login');
    }

    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->model->cek_login($username, $password);
        if (($cek))
        {
            session()->set('username', $cek['username']);
            session()->set('NIM', $cek['NIM']);
            return redirect()->to('/home');
        }else{
            session()->setFlashdata('gagal', 'Username atau Password Salah');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}