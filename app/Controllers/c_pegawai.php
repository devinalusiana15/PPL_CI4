<?php
 
 namespace App\Controllers;
 use App\Models\M_Pegawai;
 
 class c_pegawai extends BaseController
 {
    protected $model; 
    public function __construct()
    {
        $this->model = new M_Pegawai();
    }
 
    public function display()
    {
        $model = new \App\Models\m_pegawai();
        $pegawai = $this->model->getAll();
        $data = [
            'pegawai' => $pegawai,
            'title' => 'pegawai'
        ];
        return view('v_pegawai_display', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pegawai'
        ];
        return view('v_pegawai_input', $data);
    }
 
    public function store()
    {
        if (
            !$this->validate([
                'nim' => [
                    'label' => 'nim',
                    'rules' => 'required|numeric|min_length[9]|max_length[9]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'numeric' => '{field} harus berupa angka',
                        'min_length' => '{field} harus berjumlah 9 karakter',
                        'max_length' => '{field} harus berjumlah 9 karakter'
                    ]
                ],
                'nama' => [
                    'label' => 'nama',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'gender' => [
                    'label' => 'gender',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus diisi'
                    ]
                ],
                'telp' => [
                    'label' => 'telp',
                    'rules' => 'required|numeric|min_length[10]|max_length[11]',
                    'errors' => [
                        'required' => '{field} harus diisi',
                        'numeric' => '{field} harus berupa angka',
                        'min_length' => '{field} harus berjumlah lebih dari 10 angka',
                        'max_length' => '{field} harus berjumlah kurang dari 12 angka'
                    ]
                    ],
                'email' => [
                        'label' => 'email',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} harus diisi'
                        ]
                        ],
                'pendidikan' => [
                        'label' => 'pendidikan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} harus diisi'
                        ]
                ] 
            ])
        )
        {
            return view('v_pegawai_input', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Store Mahasiswa Error !'
            ]);
        }
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'gender' => $this->request->getPost('gender'),
            'telp' => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan'),
        ];
 
        $this->model->pegawai_store($data);
        return redirect()->to('/addpegawai');
    }

}