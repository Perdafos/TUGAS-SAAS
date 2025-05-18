<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Session;

class PeminjamanController extends Controller
{
    public function index()
    {
        $data = peminjaman::orderBy('judul', 'asc')->paginate(1000);
        return view('admin.peminjaman')->with('data', $data);
    }

    public function create()
    {
        return view('admin.tambah_peminjaman');
    }

    public function store(Request $request)
    {
        Session::flash('username', $request->username);
        Session::flash('judul', $request->judul);
        Session::flash('tanggal', $request->tanggal);
        Session::flash('status', $request->status);
        Session::flash('denda', $request->denda);
        Session::flash('catatan', $request->catatan);
        
        $request->validate([
            'username' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'status' => 'required|in:pinjam,kembali',
            'denda' => 'required|string|max:255',
            'catatan' => 'nullable|string|max:255',
        ]);[
            'username.required' => 'Username peminjaman harus diisi',
            'judul.required' => 'Judul peminjaman harus diisi',
            'tanggal.required' => 'Tanggal peminjaman harus diisi',
            'status.required' => 'Status peminjaman harus diisi',
            'denda.string' => 'Denda harus berupa angka',
            'catatan.string' => 'Catatan harus berupa string'
        ];
        $data = [
            'username' => $request->input('username'),
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'status' => $request->input('status'),
            'denda' => $request->input('denda'),
            'catatan' => $request->input('catatan')
        ];
        peminjaman::create($data);
        return redirect()->to('peminjaman')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = peminjaman::where('username', $id)->first();
        return view('admin.editpeminjaman')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'status' => 'required|in:pinjam,kembali',
            'denda' => 'required|string|max:255',
            'catatan' => 'nullable|string|max:255',
        ]);[
            'judul.required' => 'Judul peminjaman harus diisi',
            'tanggal.required' => 'Tanggal peminjaman harus diisi',
            'status.required' => 'Status peminjaman harus diisi',
            'denda.string' => 'Denda harus berupa angka',
            'catatan.string' => 'Catatan harus berupa string'
        ];
        $data = [
            'judul' => $request->input('judul'),
            'tanggal' => $request->input('tanggal'),
            'status' => $request->input('status'),
            'denda' => $request->input('denda'),
            'catatan' => $request->input('catatan')
        ];
        peminjaman::where('judul', $id)->update($data);
        return redirect()->to('peminjaman')->with('success', 'Peminjaman berhasil Di Edit');
    }

    public function destroy($id)
    {
        peminjaman::where('username', $id)->delete();
        return redirect()->to('peminjaman')->with('success', 'berhasil Hapus Data');
    }
}
