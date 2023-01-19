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
                <form action="index.html">
                    <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Forgot Password</h2>
                    <p>Input your email and we will send you reset password</p>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input">
                    </div>
                    </div>
                    <input type="submit" class="btn" value="Send">
                    <div class="div-regis">
                    <p>Remember your account? <a href="/signIn">Sign In</a> now</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection