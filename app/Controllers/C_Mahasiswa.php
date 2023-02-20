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
        $keyword = $this->request->getVar('keyword') ? $this->request->getVar('keyword') : null;
        $mahasiswa = $keyword ? $this->model->mahasiswaSearch($keyword) : $this->model->getAll();
        $model = new \App\Models\m_mahasiswa();
        $data = [
            'mahasiswa' => $mahasiswa,
            'title' => 'mahasiswa'
        ];
        return view('v_mahasiswa_display', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Mahasiswa'
        ];
        return view('v_mahasiswa_input', $data);
    }
 
    public function store()
    {
        if (
            !$this->validate([
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
            ])
        ) {
            return view('v_mahasiswa_input', [
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
        return redirect()->to('/mahasiswa');
    }

    public function detail($NIM)
    {
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
            'mahasiswa' => $this->model->getMahasiswa($NIM),
            'title' => 'Detail Mahasiswa'
        ];
        return view('v_edit', $data);
    }

    public function update($NIM)
    {
        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur')
        ];

        $this->model->mahasiswa_update($data,$NIM);
        return redirect()->to('/mahasiswa');
    }

}