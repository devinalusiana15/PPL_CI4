<?php

namespace App\Controllers;

class c_Home extends BaseController
{
    public function index()
    {
        
        $data['konten'] = [
            'title' => 'Home'
        ];
        return view('v_Home', $data);
    }
}
