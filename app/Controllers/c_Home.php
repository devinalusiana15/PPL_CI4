<?php

namespace App\Controllers;

class c_Home extends BaseController
{
    public function index()
    {
        if(session()->get('username')=='')
        {
            
            session()->setFlashdata('gagal', 'Anda belum login!');
            return redirect()->to('/');
        }
        $data['konten'] = [
            'title' => 'Home'
        ];
        return view('v_Home', $data);
    }
}
