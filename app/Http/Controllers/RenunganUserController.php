<?php

namespace App\Http\Controllers;

use App\Models\Renungan;
use Illuminate\Http\Request;

class RenunganUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $renungans = Renungan::all();
        // dd($renungans);
        return view('user.renungan', compact('renungans'));
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *

     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.

     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        //
    }
}