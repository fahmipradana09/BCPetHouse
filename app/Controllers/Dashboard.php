<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'active' => 'dashboard'
        ];
        return view('admin/dashboard/index',$data);
    }
}