<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alergi;

class AlergiController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Alergi::all();
        return view('admin.datalergi.alergi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $model = new Alergi;
        return view('admin.datalergi.alergi', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Alergi;
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->alergi = $request->alergi;
        $model->save();

        return redirect('alergi');
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
        $model = Alergi::find($id);
        return view('admin.datalergi.alergiedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model =  Alergi::find($id);
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->alergi = $request->alergi;
        $model->save();

        return redirect('alergi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = Alergi::find($id);
        $model->delete();
        return redirect('alergi');
    }
}
