<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail(Request $request){

        Mail::to($request->email)->send(new Email());
        return response(['message' => trans('passwords.sent')], 200);
    }
}
