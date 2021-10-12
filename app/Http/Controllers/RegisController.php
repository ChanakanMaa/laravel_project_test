<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    // public function store(Request $request){

    //     $regis = new Regis();
    //     $regis->fname = request('fname');
    //     $regis->lname = request('lname');
    //     $regis->username = request('username');
    //     $regis->email = request('email');
    //     $regis->tel = request('tel');
    //     $regis->save();
    // }

    function index() {
        $email = "Ninkk@gmail.com";
        $tel = "06000000";
//        return view('register', ['email'=>$email, 'tel'=>$tel]);
//        return view('register', compact('email', 'tel'));
        return view('register')
        ->with('email', $email)
        ->with('tel', $tel)
        ->with('error', 'Not found')
        ->with('status', 'Save Success');
    }
}
