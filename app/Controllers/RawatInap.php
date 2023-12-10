<?php

namespace App\Controllers;

class RawatInap extends BaseController
{
    public function index()
    {
        $data = [
            'active' => 'rawatinap' 
        ];
        return view('admin/rawat_inap/index',$data);
    }

}