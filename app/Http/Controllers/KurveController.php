<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurveyHarian;

class KurveController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = KurveyHarian::all();
        return view('admin.kurvey.kurvey', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new KurveyHarian;
        return view('admin.kurvey.kurvey', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        $model = new KurveyHarian;
        $model->name = $request->name;
        $model->prodi2 = $request->prodi2;
        $model->kamar = $request->kamar;
        $model->jadwal = $request->jadwal;
        $model->tugas = $request->tugas;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('kurvey');
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
        $model = KurveyHarian::find($id);
        return view('admin.kurvey.kurveyedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $model = KurveyHarian::find($id);
        $model->name = $request->name;
        $model->prodi2 = $request->prodi2;
        $model->kamar = $request->kamar;
        $model->jadwal = $request->jadwal;
        $model->tugas = $request->tugas;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('kurvey');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = KurveyHarian::find($id);
        $model->delete();
        return redirect('kurvey');
    }

    //user controller
    public function index1()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 1')->get();
        return view('user.kurverusun1', compact('data'));
    }
    public function index2()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 2')->get();
        return view('user.kurverusun2', compact('data'));
    }
    public function index3()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 3')->get();
        return view('user.kurverusun3', compact('data'));
    }
    public function index4()
    {
        $data = KurveyHarian::where('asrama', 'Rusun 4')->get();
        return view('user.kurverusun4', compact('data'));
    }
    public function indexp()
    {
        $data = KurveyHarian::where('asrama', 'Pniel')->get();
        return view('user.kurvepniel', compact('data'));
    }
    public function indexs()
    {
        $data = KurveyHarian::where('asrama', 'Silo')->get();
        return view('user.kurvesilo', compact('data'));
    }
    public function indexk()
    {
        $data = KurveyHarian::where('asrama', 'Kapernaum')->get();
        return view('user.kurvekapernaum', compact('data'));
    }
    public function indexdt()
    {
        $data = KurveyHarian::where('asrama', 'Danau Toba')->get();
        return view('user.kurvedantob', compact('data'));
    }
}