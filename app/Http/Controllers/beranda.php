<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beranda extends Controller
{
    public function index()
    {

        return view('user.beranda');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
}