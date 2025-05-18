@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
    <!-- tabel peminjaman -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                        <a href="peminjaman/create">
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
                                    <th>Tanggal Peminjaman</th>
                                    <th>Status</th>
                                    <th>Denda</th>
                                    <th>Catatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data->firstItem(); ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->denda }}</td>
                                        <td>{{ $item->catatan }}</td>
                                        <td>
                                            <a href="{{ url('peminjaman/' . $item->username . '/edit') }}"
                                                class="btn btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $item->username }}">
                                                Delete
                                            </button>

                                            <div class="modal fade" id="deleteModal{{ $item->username }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $item->username }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $item->isbn }}">Konfirmasi
                                                                Hapus</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data User
                                                            <strong>{{ $item->username }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form class="d-inline"
                                                                action="{{ url('peminjaman/' . $item->username) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>


@endsection
