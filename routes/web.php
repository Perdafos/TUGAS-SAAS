<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PenulisController;



/* |--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Route::get('/login', [PagesController::class, 'loginPage'])->name('login');

// Route::get('/register', [PagesController::class, 'registerPage'])->name('register');

// Route::get('/admin', [PagesController::class, 'dashboardAdmin'])->name('dashboardAdmin');

// Route::get(uri: '/siswa', action: [PagesController::class, 'dashboardSiswa'])->name(name: 'dashboardSiswa');

// Route::get(uri: '/buku', action: [PagesController::class, 'bukuSiswa'])->name(name: 'bukuSiswa');

// Route::get(uri: '/bukuadmin', action: [PagesController::class, 'bukuAdmin'])->name(name: 'bukuAdmin');

// Route::get(uri: '/kategori', action: [PagesController::class, 'kategoriAdmin'])->name(name: 'kategoriAdmin');

// Route::get(uri: '/penulis', action: [PagesController::class, 'penulisAdmin'])->name(name: 'penulisAdmin');

// Route::get(uri: '/penerbit', action: [PagesController::class, 'index'])->name(name: 'penerbitAdmin');

// Route::get(uri: '/peminjaman', action: [PagesController::class, 'peminjamanAdmin'])->name(name: 'peminjamanAdmin');

// Route::get(uri: '/peminjamansiswa', action: [PagesController::class, 'peminjamanSiswa'])->name(name: 'peminjamanSiswa');

// Route::get(uri: '/pengaturan', action: [PagesController::class, 'pengaturanAdmin'])->name(name: 'pengaturanAdmin');

// Route::get(uri: '/pengaturansiswa', action: [PagesController::class, 'pengaturanSiswa'])->name(name: 'pengaturanSiswa');

// Route::get(uri: '/tambahbuku', action: [PagesController::class, 'tambah_bukuAdmin'])->name(name: 'tambah_bukuAdmin');

// Route::get(uri: '/updatebuku', action: [PagesController::class, 'update_bukuAdmin'])->name(name: 'update_bukuAdmin');

// Route::get(uri: '/tambahkategori', action: [PagesController::class, 'tambah_kategoriAdmin'])->name(name: 'tambah_kategoriAdmin');

// Route::get(uri: '/updatekategori', action: [PagesController::class, 'update_kategoriAdmin'])->name(name: 'update_kategoriAdmin');

// Route::get(uri: '/tambahpenulis', action: [PagesController::class, 'tambah_penulisAdmin'])->name(name: 'tambah_penulisAdmin');

// Route::get(uri: '/updatepenulis', action: [PagesController::class, 'update_penulisAdmin'])->name(name: 'update_penulisAdmin');

// Route::get(uri: '/tambahpenerbit', action: [PagesController::class, 'tambah_penerbitAdmin'])->name(name: 'tambah_penerbitAdmin');

// Route::get(uri: '/updatepenerbit', action: [PagesController::class, 'update_penerbitAdmin'])->name(name: 'update_penerbitAdmin');

// Route::get(uri: '/tambahpinjam', action: [PagesController::class, 'tambah_pinjamAdmin'])->name(name: 'tambah_pinjamAdmin');

// Route::get(uri: '/updatepinjam', action: [PagesController::class, 'update_pinjamAdmin'])->name(name: 'update_pinjamAdmin');

// Route::get(uri: '/tambahpinjamsiswa', action: [PagesController::class, 'tambah_pinjamSiswa'])->name(name: 'tambah_pinjamSiswa');

// Route::get(uri: '/updatepinjamsiswa', action: [PagesController::class, 'update_pinjamSiswa'])->name(name: 'update_pinjamSiswa');


route::resource('buku', BukuController::class);
route::resource('kategori', KategoriController::class);
route::resource('peminjaman', PeminjamanController::class);
route::resource('penerbit', PenerbitController::class);
route::resource('penulis', PenulisController::class);