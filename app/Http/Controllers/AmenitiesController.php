<?php

namespace App\Http\Controllers;
use App\Models\Amenities;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    function amenities($id)
    {

        $amenity= DB::table('amenities')
        ->where('hotels_id',$id)

       // ->select('amenity')
        ->get('amenity');
        return (['amenities'=>$amenity]);



    }

    function add(Request $req)
    {
        $amenities=new Amenities;
        $amenities->hotels_id=$req->hotels_id;
        $amenities->amenity=$req->amenity;


        $result=$amenities->save();
        if($result)
        {
            return["result"=>"Amenity added"];


        }
        else{
            return["result"=>"There was an error adding this model"];
        }

    }
}
