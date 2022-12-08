<?php

namespace App\Http\Controllers;
use App\Models\Serviceprovider;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    function add(Request $req)
    {
        $serviceprovider=new Serviceprovider;
        $serviceprovider->hotel_name=$req->hotel_name;
        $serviceprovider->city=$req->city;
        $serviceprovider->country=$req->country;
        $serviceprovider->description=$req->description;
        $serviceprovider->info=$req->info;

        $result=$serviceprovider->save();
        if($result)
        {
            return["result"=>"Hotel successfully created"];


        }
        else{
            return["result"=>"There was an error creating this model"];
        }

    }
    function update(Request $req)
    {
        $serviceprovider = Serviceprovider::find($req->id);
        $serviceprovider->name=$req->name;
        $serviceprovider->email=$req->email;

       $result= $serviceprovider->save();
       if($result)
       {
        return["result"=>"data has been updated"];
       }
       else{
        return["result"=>"update operation has not been successful."];
       }

    }

    function search($id=null)
    {
        $data= $id?Serviceprovider::find($id):Serviceprovider::all();
        return ["data"=>$data, "status"=>"200"];



         return[];


    }

    function review($id)
    {
            return $id= Serviceprovider::find($id,["hotel_name","reviews", "average_ratings"]);
        }


  //  function review($id)
    //{

        //return $id = Services::find( $id, ['reviews'] );
      //  return $id = Services::find( $id );
    //}







    function info($id)
    {
            return $id= Serviceprovider::find($id,["info"]);
        }

        function updateinfo(Request $req)
        {
            $serviceprovider = Serviceprovider::find($req->id);

            $serviceprovider->info=$req->info;

           $result= $serviceprovider->save();
           if($result)
           {
            return["result"=>"data has been updated"];
           }
           else{
            return["result"=>"update operation has not been successful."];
           }


        }

        function updatedescription(Request $req)
        {
            $serviceprovider = Serviceprovider::find($req->id);

            $serviceprovider->description=$req->description;

           $result= $serviceprovider->save();
           if($result)
           {
            return["result"=>"data has been updated"];
           }
           else{
            return["result"=>"update operation has not been successful."];
           }

        }



}
