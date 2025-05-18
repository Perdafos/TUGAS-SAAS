<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Session;

class KategoriController extends Controller
{
    public function index()
    {
        $data = kategori::orderBy('judul', 'asc')->paginate(perPage: 1000);
        return view('admin.kategori')->with('data', $data);
    }

    public function create()
    {
        return view('admin.tambah_kategori');
    }

    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('kategori', $request->kategori);
        Session::flash('isbn', $request->isbn);
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:Fiksi,Non-Fiksi,Komik,Majalah',
            'isbn' => 'required|integer'
        ]);[
            'judul.required' => 'Judul kategori harus diisi',
            'kategori.required' => 'Kategori kategori harus diisi',
            'rak.required' => 'Rak kategori harus diisi',
            'isbn.integer' => 'ISBN harus berupa angka'
        ];
        $data = [
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'isbn' => $request->input('isbn')
        ];
        Kategori::create($data);
        return redirect()->to('kategori')->with('success', 'kategori berhasil ditambahkan');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = Kategori::where('isbn', $id)->first();
        return view('admin.editkategori')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:Fiksi,Non-Fiksi,Komik,Majalah',
            'isbn' => 'required|integer',
            
        ]);[
            'judul.required' => 'Judul kategori harus diisi',
            'kategori.required' => 'Kategori kategori harus diisi',
            'isbn.integer' => 'ISBN harus berupa angka'
        ];
        $data = [
            'judul' => $request->input('judul'),
            'kategori' => $request->input('kategori'),
            'isbn' => $request->input('isbn')
        ];
        Kategori::where('isbn', $id)->update($data);
        return redirect()->to('kategori')->with('success', 'berhasil Update Data');
    }

    public function destroy($id)
    {
        Kategori::where('isbn', $id)->delete();
        return redirect()->to('kategori')->with('success', 'berhasil Hapus Data');
    }
}
