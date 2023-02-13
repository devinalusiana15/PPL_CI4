<?php
 
 namespace App\Controllers;
 use App\Models\M_Mahasiswa;
 
 class C_Mahasiswa extends BaseController
 {
    protected $model; 
    public function __construct()
    {
        $this->model = new M_Mahasiswa();
    }

    public function intro()
    {
        $data =  [
            'name' => 'Devina Lusiana',
            'title' => 'Mahasiswa'
        ];
        return view('mahasiswa/index', $data);
    }
 
    public function display()
    {
        if(session()->get('username')=='')
        {
            
            session()->setFlashdata('gagal', 'Anda belum login!');
            return redirect()->to('/');
        }
        $model = new \App\Models\M_Mahasiswa();
        $data = [
            'mahasiswa' => $model->getAll(),
            'title' => 'Mahasiswa'
        ];
        return view('v_mahasiswa_display', $data);
    }

    public function create()
    {
        if(session()->get('username')=='')
        {
            
            session()->setFlashdata('gagal', 'Anda belum login!');
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Mahasiswa'
        ];
        return view('v_mahasiswa_input', $data);
    }
 
    public function store()
    {
        if (!$this->validate([
            'NIM' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 9 karakter',
                    'max_length' => '{field} harus berjumlah 9 karakter'
                ]
            ],
            'Nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'Umur' => [
                'label' => 'Umur',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka'
                ]
            ]
        ])) {
            return view('mahasiswa_input', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Store Mahasiswa Error !'
            ]);
        }
        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur')
        ];
 
        $this->model->mahasiswa_store($data);
        return redirect()->to('/');
    }

    public function detail($NIM)
    {
        if(session()->get('username')=='')
        {
            
            session()->setFlashdata('gagal', 'Anda belum login!');
            return redirect()->to('/');
        }
        $data = [
            'mahasiswa' => $this->model->getMahasiswa($NIM),
            'title' => 'Detail Mahasiswa'
        ];
        return view('v_detail', $data);
    }

    public function delete($NIM)
    {
        $this->model->deleteMahasiswa($NIM);
        return redirect()->to('/mahasiswa');
    }

    public function edit($NIM)
    {
        $data = [
            'title' => 'Edit Mahasiswa',
            'mahasiswa' => $this->model->getMahasiswa($NIM)
        ];
        return view ('v_edit', $data);
    }

    public function editStore()
    {
        $data = [
            'NIM' => $this->request->getPost('NIM'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur')
        ];
        $this->model->mahasiswa_store($data);
        return redirect()->to('/');
    }
}