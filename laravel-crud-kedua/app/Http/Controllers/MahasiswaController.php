<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('index', ['mahasiswa' => $mahasiswa]);
        
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request) 
    {
        // insert data ke tabel mahasiswa
        Mahasiswa::create([
            'nama' => $request->namamhs,
            'nim' => $request->nimmhs,
            'email' => $request->emailmhs,
            'jurusan' => $request->jurusanmhs
        ]);
        return redirect('/');
    }

    public function detail($id) 
    {
        // insert data ke tabel mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        return view('detail', ['mahasiswa' => $mahasiswa]);
    }

    public function edit($id) 
    {
        // insert data ke tabel mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request) 
    {
            $mahasiswa = Mahasiswa::find($id);
            $mahasiswa->nama = $request->namamhs;
            $mahasiswa->nim = $request->nimmhs;
            $mahasiswa->email = $request->emailmhs;
            $mahasiswa->jurusan = $request->jurusanmhs;
            $mahasiswa->save();
        return redirect('/');
    }

    public function hapus($id) 
    {
        // insert data ke tabel mahasiswa
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/');
    }
}
