<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    function add(Request $req)
    {
        $admins=new Admin;
        $admins->admin_name=$req->name;
        $admins->admin_email=$req->email;
        $admins->admin_password=Hash::make($req->password);
        $result=$admins->save();
        if($result)
        {
            return["result"=>"Data saved"];


        }
        else{
            return["result"=>"There was an error adding you as an admin."];
        }

    }
}
