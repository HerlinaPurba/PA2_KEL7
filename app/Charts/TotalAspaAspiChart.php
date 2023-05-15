<?php

namespace App\Charts;

use App\Models\DormMate;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalAspaAspiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $totalAspaAspi = DormMate::orderBy('gender')->get();
        $data=[
            $totalAspaAspi->where('gender', 'Perempuan')->count(),
            $totalAspaAspi->where('gender', 'Laki-laki')->count(),
        ];
        $label=[
            'Aspa',
            'Aspi',
        ];
        return $this->chart->pieChart()
            ->setTitle('Data Aspa Aspi')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
