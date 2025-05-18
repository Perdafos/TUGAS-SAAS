@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
    <!-- form tambah -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="penulis p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Tambah Peminjaman
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">
                                Halaman Tambah Data Peminjam
                            </li>
                        </ol>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('peminjaman') }}" class="row my-4 gap-3" method="post">
                            @csrf
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="username" class="form-label">
                                        Username *
                                    </label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Masukkan username" value="{{ Session::get('username') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="judul" class="form-label">
                                        Judul Buku *
                                    </label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        placeholder="Masukkan Judul Buku" value="{{ Session::get('judul') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="tanggal" class="form-label">
                                        Tanggal Peminjaman *
                                    </label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                                        placeholder="Masukkan Tanggal" value="{{ Session::get('tanggal') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="status" class="form-label">
                                        Status *
                                    </label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">Pilih Status</option>
                                        <option value="pinjam" {{ Session::get('status') == 'pinjam' ? 'selected' : '' }}>Pinjam</option>
                                        <option value="kembali" {{ Session::get('status') == 'kembali' ? 'selected' : '' }}>Kembali</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="denda" class="form-label">
                                        Denda *
                                    </label>
                                    <input type="text" name="denda" id="denda" class="form-control"
                                        placeholder="Masukkan Denda" value="{{ Session::get('denda') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="catatan" class="form-label">
                                        Catatan *
                                    </label>
                                    <input type="text" name="catatan" id="catatan" class="form-control"
                                        placeholder="Masukkan Catatan" value="{{ Session::get('catatan') }}">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-warning">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
