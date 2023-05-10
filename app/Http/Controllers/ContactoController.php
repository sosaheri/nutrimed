<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function send(Request $request)
    {
        // dd($request->all());

        Mail::to("hola@nutrimed.com.ve")->send(new ContactMailable);
    }
}
