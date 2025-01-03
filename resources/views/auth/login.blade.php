@extends('layouts.auth')

@section('content')
<h5 class="text-dark fw-bold mb-4">Sign In</h5>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="mb-1">Alamat Email</label>
        <input type="text" name="email" class="form-control" placeholder="Tulis alamat email kamu" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="mb-1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan password kamu">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button class="btn btn-primary d-block w-100 mb-3" type="submit">Sign In</button>
    <p class="mb-0 text-secondary text-center">
        Belum memiliki akun? <a href="{{ route('register') }}">Daftar</a>
    </p>
</form>
@endsection
