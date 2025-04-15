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
                        Update Peminjaman <Data></Data>
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-white">
                            Halaman Update Data Peminjaman
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
                                    <label for="judul_buku" class="form-label">
                                        Judul Buku *
                                    </label>
                                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Masukkan Juduk Buku">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="tgl-pinjam" class="form-label">
                                        Tanggal Peminjaman *
                                    </label>
                                    <input type="date" name="tgl-pinjam" id="tgl-pinjam" class="form-control">
                                </div>
                                <div class="col-12 col-md-4 form-group">
                                <label for="status" class="form-label">
                                    Status *
                                </label>
                                <select name="status" id="status" class="form-select" aria-label="Default select example">
                                    <option selected>
                                        -Pilih Status-
                                    </option>
                                    <option value="ya">Dipinjam</option>
                                    <option value="tidak">Tidak Dipinjam</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="denda" class="form-label">
                                    Denda *
                                </label>
                                <select name="denda" id="denda" class="form-select" aria-label="Default select example">
                                    <option selected>
                                        -Pilih opsi Denda-
                                    </option>
                                    <option value="ya">Denda</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                            </div>
                                <div class="col-12 col-md-4 form-group">
                                    <label for="catatan" class="form-label">
                                        Catatan *
                                    </label> 
                                    <input type="text" name="catatan" id="catatan" class="form-control" placeholder="Masukkan Catatan">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12 col-md-4">
                                    <button class="btn btn-warning">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
      

@endsection