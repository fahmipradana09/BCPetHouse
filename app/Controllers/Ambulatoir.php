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
        session();
        $data = [
            'active' => 'ambulatoir',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/ambulatoir/create', $data);
    }

    public function save()
    {

        //validation
        if(!$this->validate([
            'ownerName' => 'required|max_length[50]',
            'petName' => 'required|max_length[50]',
            'age' => 'required|max_length[5]',
            'address' => 'required|max_length[500]',
            'phoneNumber' => 'required|max_length[30]',
            'animalType' => 'required|max_length[30]',
            'race' => 'required|max_length[30]',
            'furColor' => 'required|max_length[30]',
            'gender' => 'required|max_length[10]',
        ])){
            $validation = \Config\Services::validation();
             var_dump($validation);
            return redirect()->to('/Ambulatoir/create')->withInput()->with('validation',$validation);
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