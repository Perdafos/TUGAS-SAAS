@extends('template.layout-admin')

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
                            Edit Penulis
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">
                                Halaman Edit Data Penulis
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
                        <form action="{{ url('penulis/'.$data->isbn) }}" class="row my-4 gap-3" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="judul" class="form-label">
                                        Judul *
                                    </label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        placeholder="Masukkan Judul Buku" value="{{ $data->judul }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="penulis" class="form-label">
                                        Penulis *
                                    </label>
                                    <input type="text" name="penulis" id="penulis" class="form-control"
                                        placeholder="Masukkan Nama Penulis" value="{{ $data->penulis }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="isbn" class="form-label">
                                        ISBN *
                                    </label>
                                    <input type="integer" name="isbn" id="isbn" class="form-control"
                                        placeholder="Masukkan Nomor ISBN" value="{{ $data->isbn }}" readonly>
                                </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-warning">
                                        Edit
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
