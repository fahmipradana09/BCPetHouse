<?php

namespace App\Controllers;

use App\Models\PetProfileModel;

class PetList extends BaseController
{
    protected $petModel;
    public function __construct()
    {
        $this->petModel = new PetProfileModel();
    }

    public function index()
    {   
 
        $data = [
            'active' => 'petlist',
            'pet' => $this->petModel->getPetProfile()
        ];

        return view('admin/pet_list/index',$data);
    }

    public function detail($id)
    {
       $data = [
        'active' => 'detailpet',
        'pet' => $this->petModel->getPetProfile($id)
       ];

        //dd($data);
       return view('admin/pet_list/detail',$data);
    }
}