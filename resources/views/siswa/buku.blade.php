@extends('template.layout-siswa')

@section('title', 'login - web perpustakaan')

  @section('header')
    @include('template.sidebar_siswa')
  @endsection 

  @section('main')
    <!-- main content -->
        <main class="flex-1 p-6">
            <div class="max-w-6xl mx-auto">
                <h1 class="text-4xl font-semibold mb-4">Buku</h1>
                
                <h3>Halaman Daftar Buku</h3>
                

                <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Card 1 -->
                    <div class="bg-gray shadow-lg rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('images/book.jpeg') }}"
                            alt="Bulan"
                            class="row d-flex w-150 m-24"
                        />
                        <div class="p-4">
                            <p class="text-center font-semibold text-xl">Bulan</p>
                            <p class="text-center text-gray-500 mb-3">Ditulis oleh Tere Liye</p>
                            <a href="#">
                                <button
                                    class="center">
                                    Pinjam
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-gray shadow-lg rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('images/book.jpeg') }}"
                            alt="Bulan"
                            class="row d-flex w-150 m-24"
                        />
                        <div class="p-4">
                            <p class="text-center font-semibold text-xl">Bulan</p>
                            <p class="text-center text-gray-500 mb-3">Ditulis oleh Tere Liye</p>
                            <a href="#">
                                <button
                                    class="center">
                                    Pinjam
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-gray shadow-lg rounded-lg overflow-hidden">
                        <img
                            src="{{ asset('images/book.jpeg') }}"
                            alt="Bulan"
                            class="row d-flex w-150 m-24"
                        />
                        <div class="p-4">
                            <p class="text-center font-semibold text-xl">Bulan</p>
                            <p class="text-center text-gray-500 mb-3">Ditulis oleh Tere Liye</p>
                            <a href="#">
                                <button
                                    class="center">
                                    Pinjam
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Repeat for additional cards as needed -->
                </div>
            </div>
        </main>
        <footer class="py-4 bg-gray-200 mt-auto">
            <div class="text-center text-gray-600">
                Copyright &copy; Web Perpustakaan {{ date('Y') }}
            </div>
        </footer>
    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
@endsection
