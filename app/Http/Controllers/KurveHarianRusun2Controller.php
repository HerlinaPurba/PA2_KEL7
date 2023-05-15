<?php

namespace App\Http\Controllers;

use App\Models\KurveyHarian;
use Illuminate\Http\Request;

class KurveHarianRusun2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 2')->get();
        return view('user.kurverusun2', compact('data'));
    }



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
