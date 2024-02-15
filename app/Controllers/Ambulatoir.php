<?php

namespace App\Controllers;

use App\Models\AmbulatoirsModel;
use App\Models\PetProfileModel;


class Ambulatoir extends BaseController
{
    protected $petModel;
    protected $ambulatoirModel;


    public function __construct()
    {
        $this->petModel = new PetProfileModel();
        $this->ambulatoirModel = new AmbulatoirsModel();

    }

    public function index()
    {
        $data = [
            'active' => 'ambulatoir',
            'ambulatoir' => $this->ambulatoirModel->getAmbulatoir()
        ];
        return view('admin/ambulatoir/index',$data);
    }

    public function create()
    {
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
            'color' => Session()->getFlashdata("color"),
            'gender' => Session()->getFlashdata("gender"),
            'amnesa' => Session()->getFlashdata("amnesa"),
            'statusPresent' => Session()->getFlashdata("statusPresent"),
            'temuanKlinis' => Session()->getFlashdata("temuanKlinis"),
            'diagnosa' => Session()->getFlashdata("diagnosa"),
            'treatment' => Session()->getFlashdata("treatment"),

        ];
        return view('admin/ambulatoir/create', $data);
    }

    public function detail($id)
    {
        //dd($this->petModel->getPetProfile($id));
        //dd($id);
       $data = [
        'active' => 'detailpet',
        'pet' => $this->ambulatoirModel->getAmbulatoir($id),
        'validation' => \Config\Services::validation(),
        'errorValidasi' => Session()->getFlashdata("errorValidasi"), //ini alternatif nya pake flash data 
        'ownerName' => Session()->getFlashdata("ownerName"),
        'petName' => Session()->getFlashdata("petName"),
        'age' => Session()->getFlashdata("age"),    
        'address' => Session()->getFlashdata("address"),
        'phoneNumber' => Session()->getFlashdata("phoneNumber"),
        'animalType' => Session()->getFlashdata("animalType"),
        'race' => Session()->getFlashdata("race"),
        'color' => Session()->getFlashdata("color"),
        'gender' => Session()->getFlashdata("gender"),
        'amnesa' => Session()->getFlashdata("amnesa"),
        'statusPresent' => Session()->getFlashdata("statusPresent"),
        'temuanKlinis' => Session()->getFlashdata("temuanKlinis"),
        'diagnosa' => Session()->getFlashdata("diagnosa"),
        'treatment' => Session()->getFlashdata("treatment"),
        
       ];
    

        //dd($data);
       return view('admin/ambulatoir/detail',$data);

       //jika page tidak ditemukan
       if(empty($data['pet']))
       {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data '.$id.'tidak terdaftar');
       }
    }

    public function save()
    {

        $validation = \Config\Services::validation(); 

        if(!$this->validate([
            'ownerName' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Owner Name Wajib diisi',
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
            'color' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Color Wajib diisi'
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
            return redirect()->to(base_url('ambulatoir/create'))->withInput()
            ->with('errorValidasi',$validation->listErrors())
            ->with('ownerName',$validation->getError('ownerName')) // Ini cara ngakalin biar data perkolomnya bisa dilempar ke create
            ->with('petName',$validation->getError('petName'))
            ->with('age',$validation->getError('age'))
            ->with('address',$validation->getError('address'))
            ->with('phoneNumber',$validation->getError('phoneNumber'))
            ->with('animalType',$validation->getError('animalType'))
            ->with('race',$validation->getError('race'))
            ->with('color',$validation->getError('color'))
            ->with('gender',$validation->getError('gender'))
            ->with('amnesa',$validation->getError('amnesa'))
            ->with('statusPresent',$validation->getError('statusPresent'))
            ->with('temuanKlinis',$validation->getError('temuanKlinis'))
            ->with('diagnosa',$validation->getError('diagnosa'))
            ->with('treatment',$validation->getError('treatment'));
        }

        //dd($this->request->getVar());
        $this-> petModel->save([
            'owner_name' => $this->request->getVar('ownerName'),
            'name' => $this->request->getVar('petName'),
            'age' => $this->request->getVar('age'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phoneNumber'),
            'animal_type' => $this->request->getVar('animalType'),
            'race' => $this->request->getVar('race'),
            'color' => $this->request->getVar('color'),
            'gender'=>$this->request->getVar('gender'),
        ]);

        $petId = $this->petModel->getInsertID();
        //dd($petId);

        $this->ambulatoirModel->save([
            'pet_id'=> $petId,
            'date_checkup' => $this->request->getVar('date'),
            'amnesa' => $this->request->getVar('amnesa'),
            'status_present' => $this->request->getVar('statusPresent'),
            'clinical_finding' => $this->request->getVar('temuanKlinis'),
            'diagnosis' => $this->request->getVar('diagnosa'),
            'medication' => $this->request->getVar('treatment')                                                                                   
        ]);
        

        session()->setFlashdata('message','Data Success');
        return redirect()->to('Ambulatoir');
    }
}