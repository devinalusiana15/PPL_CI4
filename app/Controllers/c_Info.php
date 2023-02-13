<?php

namespace App\Controllers;

class c_Info extends BaseController
{
    public function index()
    {
        if(session()->get('username')=='')
        {
            
            session()->setFlashdata('gagal', 'Anda belum login!');
            return redirect()->to('/');
        }
        $data['konten'] = [
            'title' => 'Info'
        ];
        return view('v_Informasi', $data);
    }
}
