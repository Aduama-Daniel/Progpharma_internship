<?php

namespace App\Http\Controllers;
use App\Models\Migrations;
use Illuminate\Http\Request;

class NamesController extends Controller
{
    function index()
    {
        return["result"=>"Hotel successfully created"];
    }

function search()
{
    return Migrations::all();
}
}
