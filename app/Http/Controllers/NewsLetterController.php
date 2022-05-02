<?php

namespace App\Http\Controllers;

use App\Newsletter;

class NewsLetterController extends Controller
{

    public function store(){
        try {
            $data=request()->all();
            $newsletter=new Newsletter();
            $newsletter->email=$data["email"];
            $newsletter->save();
            return response()->json(['status'=>200,'message'=>'Your message has been sent successfully']);
        }catch (\Exception $e){
            return response()->json(['status'=>500,'message'=>'Message not sent ,Please contact our office']);
        }

    }
}