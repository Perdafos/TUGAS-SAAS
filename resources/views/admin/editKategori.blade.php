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
                            Edit Kategori
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">
                                Halaman Edit Data Kategori
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
                        <form action="{{ url('kategori/'.$data->isbn) }}" class="row my-4 gap-3" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row gap-3">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="judul" class="form-label">
                                        Judul Kategori *
                                    </label>
                                    <input type="text" name="judul" id="judul" class="form-control"
                                        placeholder="Masukkan Judul Kategori" value="{{ $data->judul }}">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="kategori" class="form-label">
                                        Kategori *
                                    </label>
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="Fiksi" {{ $data->kategori == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                                        <option value="Non-Fiksi" {{ $data->kategori == 'Non-Fiksi' ? 'selected' : '' }}>Non-Fiksi</option>
                                        <option value="Komik" {{ $data->kategori == 'Komik' ? 'selected' : '' }}>Komik</option>
                                        <option value="Majalah" {{ $data->kategori == 'Majalah' ? 'selected' : '' }}>Majalah</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="isbn" class="form-label">
                                        ISBN Kategori *
                                    </label>
                                    <input type="text" name="isbn" id="isbn" class="form-control"
                                        placeholder="Masukkan ISBN Kategori" value="{{ $data->isbn }}" readonly>
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
