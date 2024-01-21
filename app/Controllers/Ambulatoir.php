<?php

namespace App\Controllers;
use App\Models\PetProfileModel;

class Ambulatoir extends BaseController
{
    protected $petModel;
    public function __construct()
    {
        $this->petModel = new PetProfileModel();
    }

    public function index()
    {
        $data = [
            'active' => 'ambulatoir'
        ];
        return view('admin/ambulatoir/index',$data);
    }

    public function create()
    {
        // session();
        $data = [
            'active' => 'ambulatoir',
            'validation' => \Config\Services::validation(),
            'errorValidasi' => Session()->getFlashdata("errorValidasi"), //ini alternatif nya pake flash data 
            'ownerName' => Session()->getFlashdata("ownerName"),
            'petName' => Session()->getFlashdata("petName"),
            'age' => Session()->getFlashdata("age"),    
            'address' => Session()->getFlashdata("address"),
            'phoneNumber' => Session()->getFlashdata("phoneNumber"),
            'animalType' => Session()->getFlashdata("animalType"),
            'race' => Session()->getFlashdata("race"),
            'furColor' => Session()->getFlashdata("furColor"),
            'gender' => Session()->getFlashdata("gender"),
            'amnesa' => Session()->getFlashdata("amnesa"),
            'statusPresent' => Session()->getFlashdata("statusPresent"),
            'temuanKlinis' => Session()->getFlashdata("temuanKlinis"),
            'diagnosa' => Session()->getFlashdata("diagnosa"),
            'treatment' => Session()->getFlashdata("treatment"),

        ];
        // ngeleg

        return view('admin/ambulatoir/create', $data);
    }

    public function save()
    {
        $validation = \Config\Services::validation(); //Nah ini harusnya gaperlu di set di contoller save , cukup didefinisikan di create
        // karna aku baca2 versi lama ci4 nya ngebug di bagian withInput jadi gabisa redirect sambil bawa datanya
        // Alternatifnya pake ajax jquery jadi gaperlu redirect , main di json nya return nya langsung 
        // Tapi karna ini gapake ajax jquery jadi alternatif kedua data validationnya di lempar ke flashdata , kekurangannya jadinya yang kelempar semua list error nya
        // klo memang mau dipaksa , bisa diakalin lempar data per kolom nya ditambahin flash data nya masing masing
        // INI SEMUA GARA GARA CI4 NGEBUG BANGSAT YANG VERSI LAWAS NYA

        // $validasi = $this->validate([
        //     'ownerName' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} Wajib diisi'
        //         ],
        //         ],
        // ]);

        // if($validasi){
        //     echo 'tervalidasi';
        // }else{
            
        // }
        // die();

        if(!$this->validate([
            'ownerName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Owner Name Wajib diisi',
                    'max_length[2]'
                ],
            ],
            'petName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pet Name Wajib diisi'
                ],
            ],
            'age' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Age Wajib diisi'
                ],
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Address Wajib diisi',

                ],
            ],
            'phoneNumber' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Phone Number Wajib diisi'
                ],
            ],
            'animalType' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Animal Type Wajib diisi'
                ],
            ],
            'race' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Race Wajib diisi'
                ],
            ],
            'furColor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Fur Color Wajib diisi'
                ],
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Gender Wajib diisi'
                ],
            ],
            'amnesa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Amnesa Wajib diisi'
                ],
            ],
            'statusPresent' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Present Wajib diisi'
                ],
            ],
            'temuanKlinis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Temuan Klinis Wajib diisi'
                ],
            ],
            'diagnosa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Diagnosa Wajib diisi'
                ],
            ],
            'treatment' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Diagnosa Wajib diisi'
                ],
            ],

        ])){
            return redirect()->to(base_url('ambulatoir/create'))
            ->with('errorValidasi',$validation->listErrors())
            ->with('ownerName',$validation->getError('ownerName')) // Ini cara ngakalin biar data perkolomnya bisa dilempar ke create
            ->with('petName',$validation->getError('petName'))
            ->with('age',$validation->getError('age'))
            ->with('address',$validation->getError('address'))
            ->with('phoneNumber',$validation->getError('phoneNumber'))
            ->with('animalType',$validation->getError('animalType'))
            ->with('race',$validation->getError('race'))
            ->with('furColor',$validation->getError('furColor'))
            ->with('gender',$validation->getError('gender'))
            ->with('amnesa',$validation->getError('amnesa'))
            ->with('statusPresent',$validation->getError('statusPresent'))
            ->with('temuanKlinis',$validation->getError('temuanKlinis'))
            ->with('diagnosa',$validation->getError('diagnosa'))
            ->with('treatment',$validation->getError('treatment'));
        }

        // dd($this->request->getVar());
        $this->petModel->save([
            'owner_name' => $this->request->getVar('ownerName'),
            'name' => $this->request->getVar('petName'),
            'age' => $this->request->getVar('age'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phoneNumber'),
            'animal_type' => $this->request->getVar('animalType'),
            'race' => $this->request->getVar('race'),
            'fur_color' => $this->request->getVar('furColor'),
            'gender'=>$this->request->getVar('gender'),
        ]);
        

        session()->setFlashdata('message','Data Success');
        return redirect()->to('ambulatoir');
    }
}