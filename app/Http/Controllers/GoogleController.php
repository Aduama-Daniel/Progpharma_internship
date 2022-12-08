<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Customers;
use App\Models\Serviceprovider;

class GoogleController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function googleLineChart()
    {
        $visitors = Visitor::select("hotelname", "sales")
        ->orderBy('sales','desc')

        ->get();

        $result[] = ['Hotel','Sales'];
        foreach ($visitors as $key => $value) {
            $result[++$key] = [(string)$value->hotelname, (int)$value->sales];
        }


       // $data= Serviceprovider::all();

        return view('kk', compact('result'));
        //

    }
}
