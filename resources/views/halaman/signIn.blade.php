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
                    <h2 class="title">Selamat</h2>
                    <div class="input-div one {{ old('nama_karyawan') ? 'focus' : '' }}">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Nama Karyawan</h5>
                            <input type="text" class="input form-control{{ $errors->has('nama_karyawan') ? ' is-invalid' : '' }}" id="nama_karyawan" value="{{ old('nama_karyawan') }}" name="nama_karyawan" autocomplete="off">
                            @if ($errors->has('nama_karyawan'))
                            <span class="invalid-feedback">{{ $errors->first('nama_karyawan') }}</span>
                            @endif
                    </div>
                    </div>
                    <div class="input-div one {{ old('nama_karyawan') ? 'focus' : '' }}">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" name="password" autocomplete="off">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    </div>
<<<<<<< HEAD
                    <a href="/sendemail">Lupa Password?</a>
=======
                    <a href="/sendemail">Forgot Password?</a>
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
                    <input type="submit" class="btn" value="Sign In">
                    <div class="div-regis">
                    <p>Tidak punya akun? <a href="/signUp">Daftar</a>sekarang</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('script')
<script>
var input = document.querySelector('#nama_karyawan');

// menambahkan event listener untuk event click
input.addEventListener('click', function() {
  // menghapus class "focus" pada elemen input
  input.classList.remove('focus');
});
    </script>
@endpush('')
@endsection