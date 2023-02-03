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
                <form action="{{ route('resetpassword') }}" method="POST" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <!-- <img src="img/avatar.svg"> -->
                    <h2 class="title">Reset Passsword</h2>
                    <div class="input-div one">
                        <div class="i">
                                <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                                <h5>Email</h5>
                                <input type="email" class="input" id="email" name="email">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        </div>
                    <div class="input-div one">
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
                            <h5>Confirm-Password</h5>
                            <input type="password" class="input" id="password" name="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    </div>
                    {{-- <a href="/sendemail">Forgot Password?</a> --}}
                    <input type="submit" class="btn" value="Reset Password">
                    <div class="div-regis">
                    <p>Don't have an account? <a href="/signIn">Sign In</a> now</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection