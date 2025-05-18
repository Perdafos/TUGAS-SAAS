<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    public function index()
    {
        $data = buku::orderBy('judul', 'asc')->paginate(1000);
        return view('admin.buku')->with('data', $data);
    }

    public function create()
    {
        return view('admin.tambah_buku');
    }

    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('penulis', $request->penulis);
        Session::flash('penerbit', $request->penerbit);
        Session::flash('tahun', $request->tahun);
        Session::flash('kategori', $request->kategori);
        Session::flash('rak', $request->rak);
        Session::flash('isbn', $request->isbn);
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun' => 'required|date',
            'kategori' => 'required|string|max:255',
            'rak' => 'required|string|max:255',
            'isbn' => 'required|integer'
        ]);[
            'judul.required' => 'Judul buku harus diisi',
            'penulis.required' => 'Penulis buku harus diisi',
            'penerbit.required' => 'Penerbit buku harus diisi',
            'tahun.required' => 'Tahun terbit buku harus diisi',
            'kategori.required' => 'Kategori buku harus diisi',
            'rak.required' => 'Rak buku harus diisi',
            'isbn.required' => 'ISBN buku harus diisi',
            'isbn.integer' => 'ISBN harus berupa angka'
        ];
        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun' => $request->input('tahun'),
            'kategori' => $request->input('kategori'),
            'rak' => $request->input('rak'),
            'isbn' => $request->input('isbn')
        ];
        Buku::create($data);
        return redirect()->to('buku')->with('success', 'Buku berhasil ditambahkan');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Buku::where('isbn', $id)->first();
        return view('admin.editBuku')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun' => 'required|date',
            'kategori' => 'required|string|max:255',
            'rak' => 'required|string|max:255',
            
        ]);[
            'judul.required' => 'Judul buku harus diisi',
            'penulis.required' => 'Penulis buku harus diisi',
            'penerbit.required' => 'Penerbit buku harus diisi',
            'tahun.required' => 'Tahun terbit buku harus diisi',
            'kategori.required' => 'Kategori buku harus diisi',
            'rak.required' => 'Rak buku harus diisi',
            
            
        ];
        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun' => $request->input('tahun'),
            'kategori' => $request->input('kategori'),
            'rak' => $request->input('rak'),
            
        ];
        Buku::where('isbn', $id)->update($data);
        return redirect()->to('buku')->with('success', 'berhasil Update Data');
    }

    public function destroy($id)
    {
        Buku::where('isbn', $id)->delete();
        return redirect()->to('buku')->with('success', 'berhasil Hapus Data');
    }
}
