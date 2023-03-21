@extends('Template.welcome')
@section('title', 'Reset Password')

@section('content')
<div class="content" id="text">
        <img class="wave" src="{{ asset('assets') }}/images/wave.png">
        <div class="container">
            <div class="img">
                <img src="{{ asset('assets') }}/images/bg.svg">
            </div>
            <div class="login-content">
                <form action="{{ route ('kirim') }}" method="POST" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Lupa Password</h2>
                    <p>Masukkan email Anda dan kami akan mengirimkan reset kata sandi</p>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input" name="email" id="email">
                    </div>
                    </div>
                    <input type="submit" class="btn" value="Send">
                    <div class="div-regis">
                    <p>Ingat akun Anda?<a href="/signIn">Masuk</a>sekarang</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection