<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;
use Validator;
use Crypt;


use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    //
    function search($id=null)
    {
        return $id?Customers::find($id):Customers::all();
    }

    function add(Request $req)
    {
        $customers=new Customers;
        $customers->name=$req->name;
        $customers->email=$req->email;
        $customers->password=Hash::make($req->password);
        $result=$customers->save();
        if($result)
        {
            return["result"=>"Data saved"];


        }
        else{
            return["result"=>"There was an error adding user."];
        }

    }
    function update(Request $req)
    {
        $customers = Customers::find($req->id);
        $customers->name=$req->name;
        $customers->email=$req->email;

       $result= $customers->save();
       if($result)
       {
        return["result"=>"data has been updated"];
       }
       else{
        return["result"=>"update operation has not been successful."];
       }

    }
    function adds(Request $req)

    {
        $rules=array(
           // "name"=>"required",
            "email"=>"required"
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            return $validator->errors();
        }
        else{
            return ["x"=>"y"];

        }

    }
    function index(Request $request)
    {
        $customers= Customers::where('email', $request->email)->first();
        // print_r($data);
            if (!$customers || !Hash::check($request->password, $customers->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }

             $token = $customers->createToken('my-app-token')->plainTextToken;

            $response = [
                'customers' => $customers,
                'token' => $token
            ];

             return response($response, 201);
    }
    function delete($id){
        $customers= Customers::find($id);
    $result=$customers->delete();
    if($result){
        return["Account"=>"has been deleted".$id];

    }
    else{
        return["Account"=>"operation failed"];
    }

}

}
