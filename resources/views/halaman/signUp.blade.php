@extends('Template.welcome')
@section('title', 'Sign Up')

@section('content')
<div class="content" id="text">
        <img class="wave" src="{{ asset('assets') }}/images/wave.png">
        <div class="container">
            <div class="img">
                <img src="{{ asset('assets') }}/images/bg.svg">
            </div>
            <div class="login-content">
                <form action="{{ route ('register.post') }}" method="POST">
                    @csrf    
                <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Selamat</h2>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" id="username" name="username">
                            @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                    </div>
                    </div>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input" id="email" name="email">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" id="password" name="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Konfirmasi Password</h5>
                            <input type="password" class="input" id="password" name="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    </div>
                    <input type="submit" class="btn" value="Sign Up">
                    <div class="div-regis">
                    <p>Sudah punya akun? <a href="/signIn">Masuk</a>Sekarang</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection