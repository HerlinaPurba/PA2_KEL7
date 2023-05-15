<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DormMate;

class KamarRusun1Controller extends Controller
{
    /**
     * Display a listing of the resource.

     */
    public function index()
    {
        $data = DormMate::where('asrama', 'Rusun 1')->get();
        return view('user.kamarrusun1', compact('data'));
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
