<?php

namespace App\Controllers;

use App\Models\PetProfileModel;

class PetList extends BaseController
{
    protected $petModel;

    public function index()
    {   
        $pet = $this->petModel->findAll();
 
        $data = [
            'active' => 'petlist',
            'pet' => $pet
        ];

        dd($pet);

        return view('admin/pet_list/index',$data);
    }
}