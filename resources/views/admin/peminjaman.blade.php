@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
      <!-- tabel peminjaman -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="peminjaman p-0 m-0">
                    <div class="container-fluid px-4">
                    <h1 class="mt-4">
                        Peminjaman
                    </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active" style="color: white;">
                            Halaman Data Peminjaman
                        </li>
                    </ol>
                    <a href="/tambahpinjam">
                        <button class="btn btn-primary mb-3">
                            Tambah Data
                        </button>
                    </a>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Peminjam</th>
                                    <th>Status</th>
                                    <th>Denda</th>
                                    <th>Catatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dimas</td>
                                    <td>Menuju Manusia Cerdas</td>
                                    <td>2024-07-20</td>
                                    <td>dipinjam</td>
                                    <td>tidak denda</td>
                                    <td>Buku dikembalikan dalam kondisi sudah disampul</td>
                                    <td>
                                        <a href="/updatepinjam">
                                            <button class="btn btn-primary">
                                                Update
                                            </button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-primary">
                                                Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </main>
    
      
@endsection