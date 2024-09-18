<?php

namespace App\Controllers;

use App\Models\AmbulatoirsModel;
use App\Models\PetProfileModel;
use App\Models\RawatInapModel;

class PetList extends BaseController
{
    protected $petModel;
    protected $ambulatoirModel;
    protected $rawatInapModel;

    public function index()
    {   
        $petModel = new PetProfileModel();
        $data = [
            'active' => 'petlist',
            'pet' => $petModel->getPetProfile()
        ];

        return view('admin/pet_list/index',$data);
    }

    public function detail($id)
    {
        //dd($this->petModel->getPetProfile($id));
        //dd($id);
        //dd(\Config\Services::validation());
        $petModel = new PetProfileModel();
        $ambulatoirModel = new AmbulatoirsModel();
        $flag = $this->request->getGet('flag');
        $data = [
            'active' => 'detailpet',
            'pet' => $petModel->getPetProfile($id),
            'dataAmbulatoir' => $ambulatoirModel->getAmbulatoirDetailPet($id),
            'flag' => $flag,
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
            'clinicalFinding' => Session()->getFlashdata("clinicalFinding"),
            'diagnosis' => Session()->getFlashdata("diagnosis"),
            'medication' => Session()->getFlashdata("medication"),
            
        ];
    

        //dd($data);
       return view('admin/pet_list/detail',$data);

       //jika page tidak ditemukan
       if(empty($data['pet']))
       {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Data '.$id.'tidak terdaftar');
       }
    }

    public function delete($id)
    {
        $petModel = new PetProfileModel();
        $petModel->delete($id);
        session()->setFlashdata('message','Data berhasil dihapus.');
        return redirect()->to('PetList');
    }

    public function save($id)
    {
        $petModel = new PetProfileModel();
        $ambulatoirModel = new AmbulatoirsModel();
        $validation = \Config\Services::validation();
        //dd($this->request->getVar());
       
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
            ]

        ])){
            //dd(\Config\Services::validation());
            //dd($this->request->getVar());
            return redirect()->to(base_url('PetList/detail/'.$id))
            ->with('errorValidasi',$validation->listErrors())
            ->with('ownerName',$validation->getError('ownerName')) // Ini cara ngakalin biar data perkolomnya bisa dilempar ke create
            ->with('petName',$validation->getError('petName'))
            ->with('age',$validation->getError('age'))
            ->with('address',$validation->getError('address'))
            ->with('phoneNumber',$validation->getError('phoneNumber'))
            ->with('animalType',$validation->getError('animalType'))
            ->with('race',$validation->getError('race'))
            ->with('color',$validation->getError('color'))
            ->with('gender',$validation->getError('gender'));
        }

        
        //dd($this->request->getVar());
        $petModel->save([
            'id' => $id,
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

        session()->setFlashdata('message','Data Success Updated');
        return redirect()->to('PetList/detail/'.$id);
    }
    
    public function saveAmbulatoir($id)
    {
        $ambulatoirModel = new AmbulatoirsModel();
        $rawatInapModel = new RawatInapModel();
        $validation = \Config\Services::validation();
        //dd($this->request->getVar());
        
        if(!$this->validate([
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
            'clinicalFinding' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Temuan Klinis Wajib diisi'
                ],
            ],
            'diagnosis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Diagnosa Wajib diisi'
                ],
            ],
            'medication' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Medication Wajib diisi'
                ],
            ],

        ])){
            //dd(\Config\Services::validation());
            //dd($this->request->getVar());
            return redirect()->to(base_url('PetList/detail/'.$id))->withInput()->with('validation',$this->validator)
            ->with('errorValidasi',$validation->listErrors())
            ->with('amnesa',$validation->getError('amnesa'))
            ->with('statusPresent',$validation->getError('statusPresent'))
            ->with('clinicalFinding',$validation->getError('clinicalFinding'))
            ->with('diagnosis',$validation->getError('diagnosis'))
            ->with('medication',$validation->getError('medication'));
        }
        
        //dd($id);
        $ambulatoirModel->save([
            'pet_id' => $id,
            'amnesa' => $this->request->getVar('amnesa'),
            'status_present' => $this->request->getVar('statusPresent'),
            'clinical_finding' => $this->request->getVar('clinicalFinding'),
            'diagnosis' => $this->request->getVar('diagnosis'),
            'hospitalized_status' => $this->request->getVar('hospitalized_status'), 
            'medication' => $this->request->getVar('medication'),
        ]);

        $ambulatoirId = $ambulatoirModel->getInsertID();
        $hostpitalized = $this->request->getVar('rawatInap');

        $rawatInapModel->save([
            'id_ambulatoir' => $ambulatoirId,
            'id_petProfile' => $id
        ]);

        $rawatInapId = $rawatInapModel->getInsertID();

        session()->setFlashdata('message','Data Success');
        if($hostpitalized == '1'){
            return redirect()->to('RawatInap/detail/'.$rawatInapId.'?flag=edit');
        }else{
            return redirect()->to('PetList/detail/'.$id.'?flag=edit');
        }
    }
    

}