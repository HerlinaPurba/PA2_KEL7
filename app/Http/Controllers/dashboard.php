<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class dashboard extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function eval()
    {
        $data = Evaluation::all();
        return view('admin.dashboard', compact('data'));
    }
}