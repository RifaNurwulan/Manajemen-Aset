@extends('Template.welcome')
@section('title', 'Sign In')

@section('content')
<div class="content" id="text">
        <img class="wave" src="{{ asset('assets') }}/images/wave.png">
        <div class="container">
            <div class="img">
                <img src="{{ asset('assets') }}/images/bg.svg">
            </div>
            <div class="login-content">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Welcome</h2>
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
                    <a href="/resetPass">Forgot Password?</a>
                    <input type="submit" class="btn" value="Sign In">
                    <div class="div-regis">
                    <p>Don't have an account? <a href="/signUp">Sign Up</a> now</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection