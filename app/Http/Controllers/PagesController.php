<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loginPage () {
        return view('public.login');
        }

    public function registerPage () {
        return view('public.register');
        }

    public function dashboardAdmin () {
        return view('admin.dashboard', ['level' => 'admin']);
        }

    public function dashboardSiswa () {
        return view('siswa.dashboard', ['level' => 'siswa']);
        }

    public function bukuSiswa () {
        return view('siswa.buku');
        }

     public function bukuAdmin () {
        return view('admin.buku',);
        }

     public function kategoriAdmin () {
        return view('admin.kategori',);
        }

    public function penulisAdmin () {
        return view('admin.penulis',);
        }

    public function penerbitAdmin () {
        return view('admin.penerbit',);
        }

    public function peminjamanAdmin () {
        return view('admin.peminjaman',);
        }

    public function peminjamanSiswa () {
        return view('siswa.peminjaman');
        }

    public function pengaturanAdmin () {
        return view('admin.pengaturan',);
        }

    public function pengaturanSiswa () {
        return view('siswa.pengaturan',);
        }

    public function tambah_bukuAdmin () {
        return view('admin.tambah_buku',);
        }

    public function update_bukuAdmin () {
        return view('admin.update_buku',);
        }

    public function tambah_kategoriAdmin () {
        return view('admin.tambah_kategori',);
        }

    public function update_kategoriAdmin () {
        return view('admin.update_kategori',);
        }
    
    public function tambah_penulisAdmin () {
        return view('admin.tambah_penulis',);
        }

    public function update_penulisAdmin () {
        return view('admin.update_penulis',);
        }

    public function tambah_penerbitAdmin () {
        return view('admin.tambah_penerbit',);
        }

    public function update_penerbitAdmin () {
        return view('admin.update_penerbit',);
        }

    public function tambah_pinjamAdmin () {
        return view('admin.tambah_pinjam',);
        }

    public function update_pinjamAdmin () {
        return view('admin.update_pinjam',);
        }

        public function tambah_pinjamSiswa () {
            return view('siswa.tambah_pinjam',);
            }

            public function update_pinjamSiswa () {
                return view('siswa.update_pinjam',);
                }
}