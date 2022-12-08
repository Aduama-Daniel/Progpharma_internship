<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\PulseChart;

class PulseController extends Controller
{
    public function pulse(){
        $chart = new PulseChart;

        $chart->labels(['One', 'Two', 'Three']);
        $chart->dataset('My dataset 1', 'line', [1, 2, 3, ]);

        return view('try', ['chart' => $chart]);

    }

}
