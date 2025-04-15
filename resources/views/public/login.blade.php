@extends('template.layout-admin')

@section('title', 'login - web perpustakaan') 

  @section('main')
<section class="login-container">
<div class="card shadow-lg">
<div class="card-header">
<img src="{{ asset('images/book.jpeg') }}" alt="..." class="img-logo">
<h3 class="text-center text-white">Login - Web Perpustakaan</h3>
</div>
<div class="card-body">
<form action="">
<div class="form-group">
<label for="username" class="form-label">Username *</label>
<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username Anda">
</div>
<div class="form-group my-3"></div>
<label for="password" class="form-label">Password *</label>
<input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password Anda">
</div>
<div class="form-group my-3">
<button class="btn btn-primary" type="submit">Login</button>
</div>
</form>
</div>
<div class="card-footer">
<a href="register"><p class="text-primary text-center">Tidak punya akun? Silahkan mendaftar</p></a>
</div>
</div>
</section>
@endsection