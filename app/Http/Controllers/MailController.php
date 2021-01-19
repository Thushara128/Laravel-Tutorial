<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
   function sendmail(){
    $data =[
        'title'=>"Welcom to our Company",
        'body'=>"hello all"
    ];
    \Mail::to('thushara.t240@gmail.com')->send(new \App\Mail\Testmail($data));
    return "mail sent";
   }
}

