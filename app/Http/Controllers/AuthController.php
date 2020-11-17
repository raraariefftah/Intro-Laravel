<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function Test(Request $request){
        $first = $request->first;
        $last  = $request->last;
        return view('selamatdatang', compact('first', 'last'));
    }

}
