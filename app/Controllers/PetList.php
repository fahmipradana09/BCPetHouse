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

        // dd($pet);

        return view('admin/pet_list/index',$data);
    }

    public function detail($slug)
    {
       $data = [
        'active' => 'detailpet',
        
       ]
    }
}