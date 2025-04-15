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
                        Tambah Peminjaman <Data></Data>
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-white">
                            Halaman Tambah Data Peminjaman
                        </li>
                    </ol>
                    <form action="">
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="username" class="form-label">
                                    Username *
                                </label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="tgl-pinjam" class="form-label">
                                    Tanggal Peminjaman *
                                </label>
                                <input type="date" name="tgl-pinjam" id="tgl-pinjam" class="form-control">
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