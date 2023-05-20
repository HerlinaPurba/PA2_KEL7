<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('login.view_registrasi');
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'name' => 'required',
            'password' => 'required|min:5|max:12',
            'role' => 'required'
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Penambahan data berhasil');
        } else {
            return back()->with('fail', 'Silahkan coba lagi');
        }
    }



}