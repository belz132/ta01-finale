<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\Dosen;
use App\Models\Urgent;

class DosenController extends Controller
{
    public function index(){
        $indexAll = Dosen::all();
        return view('dosen.index', compact('indexAll'));
    }

    public function create(){
        $jurusanAll = Jurusan::all();
        return view('dosen.create', compact('jurusanAll'));
    }

    public function store(Request $request){
        $validatedDosen = $request->validate([
            'nip' => 'required|size:6',
            'jurusan_id' => 'required',
            'nama' => 'required|min:3|max:64',
            'mata_kuliah' => 'required',
            'sks' => 'required|max:1'
        ]);
        $dosen = Dosen::create($validatedDosen);
        $urgent = new Urgent;
        
        $urgent->nama_kontak = $request->input('nama_kontak');
        $urgent->hubungan_kontak = $request->input('hubungan_kontak');
        $urgent->telepon_kontak = $request->input('telepon_kontak');
        $urgent->email_kontak = $request->input('email_kontak');
        $dosen->urgent()->save($urgent);
        // $urgent->save();
        $request->session()->flash('pesan', "Data {$validatedDosen['nama']} berhasil disimpan!" );
        return redirect()->route('dosens.index');
    }

    public function show(Dosen $ini){
        return view('dosen.show', compact('ini'));
    }

    public function edit(Dosen $ini){
        $jurusans = Jurusan::all();
        return view('dosen.edit', compact('ini', 'jurusans'));
    }

    public function update(Request $request, Dosen $ini){
        $validatedDosen = $request->validate([
            'nip' => 'required|size:6',
            'jurusan_id' => 'required',
            'nama' => 'required|min:3|max:64',
            'mata_kuliah' => 'required',
            'sks' => 'required|max:1'
        ]);
        $ini->update($validatedDosen);
        $urgent = $ini->urgent;
        $urgent->nama_kontak = $request->input('nama_kontak');
        $urgent->hubungan_kontak = $request->input('hubungan_kontak');
        $urgent->telepon_kontak = $request->input('telepon_kontak');
        $urgent->email_kontak = $request->input('email_kontak');
        $ini->urgent()->save($urgent);
        return redirect()->route('dosens.index')->with('pesan', "Data $ini->nama berhasil diupdate!");
    }

    public function destroy(Dosen $ini){
        $ini->delete();
        return redirect()->route('dosens.index')->with('pesan', "Data $ini->nama berhasil dihapus!");
    }
}
