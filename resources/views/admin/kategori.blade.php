@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_admin')
  @endsection 

  @section('main')
      <!-- tabel kategori -->
        <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="kategori p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Kategori
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: white;">
                                Halaman Data Kategori
                            </li>
                        </ol>
                        <a href="/tambahkategori">
                            <button class="btn btn-primary mb-3">
                                Tambah Kategori
                            </button>
                        </a>
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Kategori</th>
                                        <th>ISBN</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bulan</td>
                                        <td>Fiksi</td>
                                        <td>12345464564564</td>
                                        <td>
                                            <a href="/updatekategori">
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
        </div>
        </main>
      
@endsection