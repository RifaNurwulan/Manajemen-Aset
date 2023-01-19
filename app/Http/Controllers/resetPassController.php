<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resetPassController extends Controller
{
    public function index()
    {
        return view('halaman.resetPass');
    }
}