<?php

namespace App\Controllers;

class c_Info extends BaseController
{
    public function index()
    {
        $data['konten'] = [
            'title' => 'Info'
        ];
        return view('v_Informasi', $data);
    }
}
