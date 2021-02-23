<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    

    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");
     
        Mail::send(['text'=>'welcome'], $data, function($message) {
           $message->to('mmnledgar@gmail.com', 'Tutorials Point')->subject
              ('Laravel Basic Testing Mail');
           $message->from('mmnledgar@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }



}
