<?php

namespace App\Http\Controllers;

use App\Models\Sakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data = Sakit::where('user_id', Auth::user()->id)->get();
        return view('user.sakit', compact('data'));
    }



    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new Sakit;
        return view('user.sakit', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $model = new Sakit;
        $model->user_id = Auth::user()->id;
        $model->username = $request->username;
        $model->name = $request->name;
        $model->kelas = $request->kelas;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->penanganan = $request->penanganan;
        // dd($request->all());
        $model->save();

        return redirect('sakit');
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

     */

    /**
     * Update the specified resource in storage.
     *

     */

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $model = Sakit::find($id);
        $model->delete();
        return redirect('sakit');
    }


}