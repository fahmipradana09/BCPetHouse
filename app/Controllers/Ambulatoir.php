<?php

namespace App\Controllers;

class Ambulatoir extends BaseController
{
    public function index()
    {
        return view('admin/ambulatoir/index');
    }

    public function detail_ambulatoir()
    {
        return view('admin/ambulatoir/detail');
    }
}