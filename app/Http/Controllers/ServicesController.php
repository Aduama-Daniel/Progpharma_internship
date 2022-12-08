<?php

namespace App\Http\Controllers;
use App\Models\Services;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class ServicesController extends Controller
{
    //



    function search($id)
    {
        return Services:: where('hotel_id', $id);

        dd($post);



        //return $id = Services::find( $id );
       // $post = Post::where('id', $id)

        //ModelName::find($id, ['name', 'surname']);
    }
    function info($hotel_id=null)
    {


    return $hotel_id?Services::find($hotel_id, ['info']):Services::all();
    }


    function add(Request $req)
    {
        $services=new Services;
        $services->service_name=$req->service_name;
        $services->hotel_id=$req->hotel_id;
        $services->starting_price=$req->starting_price;
        $services->days=$req->days;
        $services->time_from=$req->time_from;
        $services->to=$req->to;
        $services->info=$req->info;

        $result=$services->save();
        if($result)
        {
            return["result"=>"Service successfully created"];


        }
        else{
            return["result"=>"There was an error creating this model"];
        }

    }


}
