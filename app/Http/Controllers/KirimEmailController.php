<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index()
    {
        return view('halaman.Email');
    }

    public function kirim(Request $request)
    {
        $details = [
        ];

        //dd($request->email);
        Mail::to($request->email)->send(new MailSend('test'));
        if( count(Mail::failures()) > 0 ) {

             return "There was one or more failures. They were: <br />";
         } else {
             
            return redirect('signIn')->with('success', 'Email Berhasil Dikirim!');
         }
        
    }
}


