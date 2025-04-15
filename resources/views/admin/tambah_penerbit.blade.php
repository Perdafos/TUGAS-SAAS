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
                            Tambah Penerbit
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">
                                Halaman Tambah Data Penerbit
                            </li>
                        </ol>
                        <form action="{{ route('tambahpenerbit') }}" class="row my-4 gap-3" method="post">
                            @csrf
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="nama" class="form-label">
                                        Nama *
                                    </label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan nama penerbit">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="alamat" class="form-label">
                                        Alamat *
                                    </label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        placeholder="Masukkan Alamat penerbit ">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="notelp" class="form-label">
                                        Nomor telepon *
                                    </label>
                                    <input type="number" name="notelp" id="notelp" class="form-control"
                                        placeholder="Masukkan nomor telpon">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="notelp" class="form-label">
                                        Alamat Email *
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Alamat Email">
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

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
