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
                        Tambah Penulis
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-white">
                            Halaman Tambah Data Penulis
                        </li>
                    </ol>
                    <form action="">
                        <div class="row gap-3">
                            <div class="col-12 col-md-4 form-group">
                                <label for="judul_buku" class="form-label">
                                    Judul Buku *
                                </label>
                                <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukkan judul buku">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_buku" class="form-label">
                                    Penulis Buku *
                                </label>
                                <input type="text" name="penulis_buku" id="penulis_buku" class="form-control" placeholder="Masukkan penulis buku">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="isbn" class="form-label">
                                    Nomor ISBN *
                                </label> 
                                <input type="text" name="isbn" id="isbn" class="form-control" placeholder="Masukkan nomor ISBN">
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