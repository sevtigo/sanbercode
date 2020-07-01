<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function welcome(Request $request)
    {
        // $nama_depan = $request['']
        return view('welcome', $request);
    }
}
