@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('main')
<section class="login-container">
    <div class="card shadow-lg">
        <div class="card-header">
            <img src="{{ asset('images/book.jpeg') }}" alt="Logo" class="img-logo">
            <h3 class="text-center">Register - Web Perpustakaan</h3>
        </div>
        <div class="card-body">
            <form>
                @csrf
                <div class="form-group">
                    <label for="username" class="form-label">Nama Depan *</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Nama Depan Anda" required>
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Nama Belakang *</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Nama Belakang Anda" required>
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Email *</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group my-3">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda" required>
                </div>
                <div class="form-group my-3">
                    <label for="password" class="form-label">Konfirmasi Password *</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Konfirmasi Password Anda" required>
                </div>
                <div class="form-group my-3">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
