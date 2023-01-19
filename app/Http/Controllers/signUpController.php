<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signUpController extends Controller
{
    public function index()
    {
        return view('halaman.signUp');
    }
}
