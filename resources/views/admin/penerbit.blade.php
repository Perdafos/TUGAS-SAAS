@extends('template.layout-admin')

@section('title', 'login - web perpustakaan')

@section('header')
    @include('template.sidebar_admin')
@endsection

@section('main')
    <main>
        <div class="card" style="width: auto; margin: 30px;">
            <div class="card-body">
                <div class="Kategori p-0 m-0">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
                            Kategori
                        </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color: #ECDFCC;">
                                Halaman Data Kategori
                            </li>
                        </ol>
                        <a href="/penerbit/create">
                            <button class="btn btn-primary mb-3">
                                Tambah Kategori
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
                                    <th >No</th>
                                    <th >Nama Penerbit</th>
                                    <th >Alamat Penerbit</th>
                                    <th >No Telp Penerbit</th>
                                    <th >Email Penerbit</th>
                                    <th >Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = $data->firstItem(); ?>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->telp }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <a href="{{ url('penerbit/' . $item->nama . '/edit') }}"
                                                class="btn btn-warning">Edit</a>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $item->nama }}">
                                                Delete
                                            </button>

                                            <div class="modal fade" id="deleteModal{{ $item->nama }}" tabindex="-1"
                                                aria-labelledby="deleteModalLabel{{ $item->nama }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="deleteModalLabel{{ $item->nama }}">Konfirmasi
                                                                Hapus</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data Penerbit
                                                            <strong>{{ $item->judul }}</strong>?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <form class="d-inline"
                                                                action="{{ url('penerbit/' . $item->nama) }}"
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
        </div>
    </main>
@endsection
