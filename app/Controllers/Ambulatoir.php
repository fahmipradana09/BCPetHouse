<?php

namespace App\Controllers;

class Ambulatoir extends BaseController
{
    public function index()
    {
        $data = [
            'active' => 'ambulatoir'
        ];
        return view('admin/ambulatoir/index',$data);
    }

    public function detail_ambulatoir()
    {
        $data = [
            'active' => 'ambulatoir'
        ];
        return view('admin/ambulatoir/detail',$data);
    }
}