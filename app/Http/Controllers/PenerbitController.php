<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    public function create(Request $request)
    {
        $id = mt_rand(1000000000000000, 9999999999999999);
        $data = [
            'penerbit_id' => $id,
            'penerbit_nama' => $request->input('nama'),
            'penerbit_alamat' => $request->input('alamat'),
            'penerbit_notelp' => $request->input('notelp'),
            'penerbit_email' => $request->input('email'),
        ];
        Penerbit::createPenerbit($data);
        return redirect()->route('penerbit')->with('success', 'Data penerbit berhasil ditambahkan!');
    }

    public function tambah_penerbitAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'notelp' => 'required|numeric|digits_between:10,13',
            'email' => 'required|email|max:50',
        ]);

        Penerbit::create([
            'penerbit_id' => uniqid(),
            'penerbit_nama' => $validatedData['nama'],
            'penerbit_alamat' => $validatedData['alamat'],
            'penerbit_notelp' => $validatedData['notelp'],
            'penerbit_email' => $validatedData['email'],
        ]);

        return redirect()->route('penerbitAdmin')->with('success', 'Penerbit berhasil ditambahkan!');
    }

    public function penerbit()
    {
        $data = Penerbit::readPenerbit();
        return view('pages.penerbit', ['level' => 'admin'])->with('penerbit', $data);
    }

    public function index()
    {
        $penerbit = Penerbit::all(); // Fetch all penerbit records from the database
        return view('admin.penerbit', compact('penerbit')); // Pass the data to the view
    }

    public function edit($penerbit_id)
    {
        $penerbit = Penerbit::findOrFail($penerbit_id);
        return view('admin.update_penerbit', compact('penerbit'));
    }

    public function update(Request $request, $penerbit_id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'notelp' => 'required|numeric|digits_between:10,13',
            'email' => 'required|email|max:50',
        ]);

        $penerbit = Penerbit::findOrFail($penerbit_id);
        $penerbit->update([
            'penerbit_nama' => $validatedData['nama'],
            'penerbit_alamat' => $validatedData['alamat'],
            'penerbit_notelp' => $validatedData['notelp'],
            'penerbit_email' => $validatedData['email'],
        ]);

        return redirect()->route('penerbitAdmin')->with('updated', 'Penerbit berhasil diperbarui!');
    }

    public function update_penerbit($id)
    {
        $penerbit = Penerbit::readPenerbitById($id);
        return view('actions.penerbit.update_penerbit', ['level' => 'admin'])->with('penerbit', $penerbit);
    }

    public function delete($id)
    {
        Penerbit::deletePenerbit($id);
        return redirect()->route('penerbitAdmin')->with('deleted', 'Data penerbit berhasil dihapus!');
    }
}
