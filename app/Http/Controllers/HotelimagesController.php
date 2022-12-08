<?php

namespace App\Http\Controllers;
use App\Models\Hotelimages;

use Illuminate\Http\Request;

class HotelimagesController extends Controller
{
    function images($id=null)
    {

        return $id = Hotelimages::find( $id, ['hotelimages'] );

    }
}
