<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index(){
        $indexAll = Jurusan::all();
        return view('jurusan.index', compact('indexAll'));
    }

    public function create(){
        return view('jurusan.create');
    }

    public function store(Request $request){
        $validatedJurusan = $request->validate([
            'nama_jurusan' => 'required|min:3|max:64',
            'ketua_jurusan' => 'required|min:3|max:64',
            'jumlah_dosen' => 'required'
        ]);
        Jurusan::create($validatedJurusan);
        $request->session()->flash('pesan', "Jurusan {$validatedJurusan['nama_jurusan']} berhasil disimpan!" );
        return redirect()->route('jurusans.index');
    }

    public function show(Jurusan $ini){
        return view('jurusan.show', compact('ini'));
    }

    public function edit(Jurusan $ini){
        return view('jurusan.edit', compact('ini'));
    }

    public function update(Request $request, Jurusan $ini){
        $validatedJurusan = $request->validate([
            'nama_jurusan' => 'required|min:3|max:64',
            'ketua_jurusan' => 'required|min:3|max:64',
            'jumlah_dosen' => 'required'
        ]);
        $ini->update($validatedJurusan);
        return redirect()->route('jurusans.index')->with('pesan', "Jurusan $ini->nama_jurusan berhasil diupdate!");
    }

    public function destroy(Jurusan $ini){
        $ini->delete();
        return redirect()->route('jurusans.index')->with('pesan', "Jurusan $ini->nama_jurusan berhasil dihapus!");
    }
}
