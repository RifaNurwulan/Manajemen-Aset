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
                <form action="index.html">
                    <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Welcome</h2>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input">
                    </div>
                    </div>
                    <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input">
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input">
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Re-Password</h5>
                            <input type="password" class="input">
                    </div>
                    </div>
                    <input type="submit" class="btn" value="Sign Up">
                    <div class="div-regis">
                    <p>Already have an account? <a href="/signIn">Sign In</a> now</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection