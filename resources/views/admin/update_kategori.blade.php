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
                        Update Kategori
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active text-white">
                            Halaman Update Data Kategori
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
                                <label for="kategori_buku" class="form-label">
                                    Kategori Buku *
                                </label>
                                <select name="kategori" id="kategori_buku" class="form-select" aria-label="Default select example">
                                    <option selected>
                                        -Pilih kategori Buku-
                                    </option>
                                    <option value="fiksi">Fiksi</option>
                                    <option value="non-fiksi">Non fiksi</option>
                                </select>
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
                                    Update
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