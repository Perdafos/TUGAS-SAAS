@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
    <!-- main content -->
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="buku p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Buku
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: #ECDFCC;">
                                Halaman Data Buku
                            </li>
                        </ol>
                        <a href="/buku/create">
                            <button class="btn btn-primary mb-3">
                                Tambah Buku
                            </button>
                        </a>

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis Buku</th>
                                    <th>buku Buku</th>
                                    <th>Tahun Terbit</th>
                                    <th>Kategori Buku</th>
                                    <th>Rak Buku</th>
                                    <th>ISBN</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data->firstItem(); ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->penerbit }}</td>
                                        <td>{{ $item->tahun }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->rak }}</td>
                                        <td>{{ $item->isbn }}</td>
                                        <td>
                                            <a href="{{ url('buku/' . $item->isbn . '/edit') }}"
                                                class="btn btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->isbn }}">
                                                Delete
                                            </button>

                                            <div class="modal fade" id="deleteModal{{ $item->isbn }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->isbn }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->isbn }}">Konfirmasi Hapus</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data buku <strong>{{ $item->judul }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                            <form class="d-inline" action="{{ url('buku/' . $item->isbn) }}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
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
        </div>
    </main>
@endsection
