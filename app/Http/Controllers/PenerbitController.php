<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penerbit;
use Illuminate\Support\Facades\Session;
class PenerbitController extends Controller
{
     public function index()
    {
        $data = penerbit::orderBy('nama', 'asc')->paginate(1000);
        return view('admin.penerbit')->with('data', $data);
    }

    public function create()
    {
        return view('admin.tambah_penerbit');
    }

    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);
        Session::flash('telp', $request->telp);
        Session::flash('email', $request->email);
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:255',
            'email' => 'required|email',
        ]);[
            'nama.required' => 'Nama penerbit harus diisi',
            'alamat.required' => 'Alamat Penerbit harus diisi',
            'telp.required' => 'Nomor Telepon harus diisi',
            'email.requred' => 'Email harus diisi',
        ];
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
            'email' => $request->input('email'),
        ];
        penerbit::create($data);
        return redirect()->to('penerbit')->with('success', 'penerbit berhasil ditambahkan');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $data = penerbit::where('nama', $id)->first();
        return view('admin.editpenerbit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'telp' => 'required|string|max:255',
            'email' => 'required|email',
        ]);[
            'alamat.required' => 'Alamat Penerbit harus diisi',
            'telp.required' => 'Nomor Telepon harus diisi',
            'email.requred' => 'Email harus diisi',
        ];
        $data = [
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
            'email' => $request->input('email'),
        ];
        penerbit::where('nama', $id)->update($data);
        return redirect()->to('penerbit')->with('success', 'penerbit berhasil ditambahkan');
    }

    public function destroy($id)
    {
        penerbit::where('nama', $id)->delete();
        return redirect()->to('penerbit')->with('success', 'berhasil Hapus Data');
    }
}
