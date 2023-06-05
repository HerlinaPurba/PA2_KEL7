<?php

namespace App\Http\Controllers;

class beranda extends Controller
{
    public function index()
    {

        // $total_mahasiswa = DormMate::count();
        // $total_mahasiswa_putri = DormMate::where('gender', 'Perempuan')->count();
        // $total_mahasiswa_putra = DormMate::where('gender', 'Laki-laki')->count();
        return view('user.beranda');
    }
    public function admin()
    {
        return view('admin.dashboard');
    }
}
