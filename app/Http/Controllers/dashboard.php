<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Charts\TotalAspaAspiChart;
use App\Models\DormMate;

class dashboard extends Controller
{
    public function index(TotalAspaAspiChart   $totalAspaAspi){
        $data['totalAspaAspi'] =   $totalAspaAspi->build();

        $model1 = DormMate::all();
        $model2 = Evaluation::all();
        return view('admin.dashboard', compact('model1', 'model2'));
    }
}
