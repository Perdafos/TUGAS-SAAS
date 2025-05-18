<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penulis;
use Illuminate\Support\Facades\Session;
class PenulisController extends Controller
{
     public function index()
    {
        $data = penulis::orderBy('isbn', 'asc')->paginate(1000);
        return view('admin.penulis')->with('data', $data);
    }

    public function create()
    {
        return view('admin.tambah_penulis');
    }

    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('penulis', $request->penulis);
        Session::flash('isbn', $request->isbn);
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'isbn' => 'required|string',
        ]);[
            'judul.required' => 'judul penulis harus diisi',
            'penulis.required' => 'Penulis harus diisi',
            'isbn.string' => 'Nomer ISBN harus diisi',
        ];
        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'isbn' => $request->input('isbn'),
        ];
        penulis::create($data);
        return redirect()->to('penulis')->with('success', 'penulis berhasil ditambahkan');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = penulis::where('isbn', $id)->first();
        return view('admin.editPenulis')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
        ]);[
            'judul.required' => 'judul penulis harus diisi',
            'penulis.required' => 'Penulis harus diisi',
        ];
        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
        ];
        penulis::where('isbn', $id)->update($data);
        return redirect()->to('penulis')->with('success', 'penulis berhasil ditambahkan');
    }

    public function destroy($id)
    {
        penulis::where('isbn', $id)->delete();
        return redirect()->to('penulis')->with('success', 'berhasil Hapus Data');
    }
}
