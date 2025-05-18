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
                            Edit Buku
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">
                                Halaman Edit Data Buku
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
                        <form action="{{ url('buku/'.$data->isbn) }}" class="row my-4 gap-3" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="judul" class="form-label">
                                        Judul Buku *
                                    </label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        placeholder="Masukkan Judul Buku" value="{{ $data->judul }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="penulis" class="form-label">
                                        Penulis *
                                    </label>
                                    <input type="text" name="penulis" id="penulis" class="form-control"
                                        placeholder="Masukkan Penulis Buku" value="{{ $data->penulis }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="penerbit" class="form-label">
                                        Penerbit *
                                    </label>
                                    <input type="text" name="penerbit" id="penerbit" class="form-control"
                                        placeholder="Masukkan Penerbit Buku" value="{{ $data->penerbit }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="kategori" class="form-label">
                                        Kategori *
                                    </label>
                                    <input type="text" name="kategori" id="kategori" class="form-control"
                                        placeholder="Masukkan Kategori Buku" value="{{ $data->kategori }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="rak" class="form-label">
                                        Rak *
                                    </label>
                                    <input type="text" name="rak" id="rak" class="form-control"
                                        placeholder="Masukkan Rak Buku" value="{{ $data->rak }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="isbn" class="form-label">
                                        ISBN Buku *
                                    </label>
                                    <input type="text" name="isbn" id="isbn" class="form-control"
                                        placeholder="Masukkan ISBN Buku" value="{{ $data->isbn }}" readonly>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="tahun" class="form-label">
                                        Tahun Terbit *
                                    </label>
                                    <input type="date" name="tahun" id="tahun" class="form-control"
                                        placeholder="Masukkan Tahun Terbit" value="{{ $data->tahun }}">
                                </div>
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
