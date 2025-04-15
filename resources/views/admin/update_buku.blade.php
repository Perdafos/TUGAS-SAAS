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
                        Update Buku
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">
                            Halaman Update DataBuku
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
                                <label for="penulis_buku" class="form-label">Penulis Buku *</label>
                                <select name="penulis_buku" id="penulis_buku"class="form-control">
                                    <option selected>
                                        -Pilih Penulis Buku-
                                    </option>
                                    <option value="Tere Liye">
                                        Tere Liye
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="penerbit_buku" class="form-label">
                                    Penerbit Buku *
                                </label>
                                <select name="penerbit_buku" id="penerbit_buku" class="form-control">
                                    <option selected>
                                        -Pilih Penerbit Buku-
                                    </option>
                                    <option value="Gramedia">
                                        Gramedia
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="tahun_terbit" class="form-label">
                                    Tahun Terbit *
                                </label>
                                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" placeholder="Masukkan tahun terbit">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="kategori_buku" class="form-label">
                                    Kategori Buku *
                                </label>
                                <select name="kategori_buku" id="kategori_buku" class="form-control">
                                    <option selected>
                                        -Pilih Kategori Buku-
                                    </option>
                                    <option value="Fiksi">
                                        Fiksi
                                    </option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="rak_buku" class="form-label">
                                    Rak Buku *
                                </label>
                                <select name="rak_buku" id="rak_buku" class="form-control">
                                    <option selected>
                                        -Pilih Rak Buku-
                                    </option>
                                    <option value="4-L">
                                        4-L
                                    </option>
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