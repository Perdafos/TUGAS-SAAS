@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
    <!-- tabel penerbit -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="penerbit p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Penerbit
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: white;">
                                Halaman Data Penerbit
                            </li>
                        </ol>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif (session('updated'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong> {{ session('updated') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @elseif (session('deleted'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong> {{ session('deleted') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <a href="/tambahpenerbit">
                            <button class="btn btn-primary mb-3">
                                Tambah Data
                            </button>
                        </a>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="row">No</th>
                                    <th scope="row">Nama Penerbit</th>
                                    <th scope="row">Alamat Penerbit</th>
                                    <th scope="row">No Telp Penerbit</th>
                                    <th scope="row">Email Penerbit</th>
                                    <th scope="row">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerbit as $penerbit)
                                    <tr >
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penerbit->penerbit_nama }}</td>
                                        <td>{{ $penerbit->penerbit_alamat }}</td>
                                        <td>{{ $penerbit->penerbit_notelp }}</td>
                                        <td>{{ $penerbit->penerbit_email }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a
                                                    href="{{ route('update_penerbit', ['penerbit_id' => $penerbit->penerbit_id]) }}">
                                                    <button class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                                                </a>
                                                <form
                                                    action="{{ route('penerbit.delete', ['penerbit_id' => $penerbit->penerbit_id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
