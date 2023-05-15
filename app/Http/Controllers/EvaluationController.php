<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $data = Evaluation::all();
        return view('admin.evaluation.evaluation', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        $model = new Evaluation;
        return view('admin.evaluation.evaluation', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {

        $model = new Evaluation;
        $model->name = $request->name;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('evaluation');
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
        $model = Evaluation::find($id);
        return view('admin.evaluation.evaluationedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, $id)
    {
        $model =  Evaluation::find($id);
        $model->name = $request->name;
        $model->date = $request->date;
        $model->pesan = $request->pesan;
        $model->asrama = $request->asrama;
        $model->save();

        return redirect('evaluation');
    }

    /**
     * Remove the specified resource from storage.

     */
    public function destroy($id)
    {
        $model = Evaluation::find($id);
        $model->delete();
        return redirect('evaluation');
    }
}
