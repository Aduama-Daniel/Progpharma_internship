<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelimages extends Model
{
    use HasFactory;

    protected  $primaryKey = 'hotels__id';
    public $timestamps =false;
}
