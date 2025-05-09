<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        return view('kelas', ['kelas' => $kelas]);
    }

    public function destroy($id)
    {
        DB::table('siswa')->where('id_kelas', $id)->delete();
        DB::table('kelas')->where('id', $id)->delete();

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil dihapus.');
    }
    
    public function create()
    {
        return view('kelas_form');
    }

    public function store(Request $request)
    {
    $request->validate([
        'nama_kelas' => 'required',
    ]);

    DB::table('kelas')->insert([
        'nama_kelas' => $request->nama_kelas,
    ]);

    return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kelas = DB::table('kelas')->where('id', $id)
        ->first();
        return view('kelas_form', compact('kelas'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        $kelas = DB::table('kelas')
        ->where('id', '=', $request->id)
        ->update([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('kelas.index');
    }
}
