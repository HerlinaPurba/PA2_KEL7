<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurveyHarian;

class KurveHarianUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 1')->get();
        return view('user.kurverusun1', compact('data'));
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
