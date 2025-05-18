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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ url('penerbit') }}" class="row my-4 gap-3" method="post">
                            @csrf
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="nama" class="form-label">
                                        Nama Penerbit *
                                    </label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan Nama" value="{{ Session::get('nama') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="alamat" class="form-label">
                                        Alamat Penerbit *
                                    </label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        placeholder="Masukkan Alamat" value="{{ Session::get('alamat') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="telp" class="form-label">
                                        No Telp Penerbit *
                                    </label>
                                    <input type="interger" name="telp" id="telp" class="form-control"
                                        placeholder="Masukkan Nomor Telepon" value="{{ Session::get('telp') }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="email" class="form-label">
                                        Email *
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Masukkan Email" value="{{ Session::get('email') }}">
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
