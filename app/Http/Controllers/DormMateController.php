<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DormMate;


class DormMateController extends Controller
{

    public function index()
    {
        $data = DormMate::all();
        return view('admin.dormmate.matedorm', compact('data'));
    }


    public function create()
    {
        $model = new DormMate;
        return view('admin.dormmate.matedorm', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new DormMate;
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->prodi = $request->prodi;
        $model->gender = $request->gender;
        $model->angkatan = $request->angkatan;
        $model->kamar = $request->kamar;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('matedorm');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = DormMate::find($id);
        return view('admin.dormmate.matedormedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model =  DormMate::find($id);
        $model->nim = $request->nim;
        $model->name = $request->name;
        $model->prodi = $request->prodi;
        $model->gender = $request->gender;
        $model->angkatan = $request->angkatan;
        $model->kamar = $request->kamar;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('matedorm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = DormMate::find($id);
        $model->delete();
        return redirect('matedorm');
    }
}
