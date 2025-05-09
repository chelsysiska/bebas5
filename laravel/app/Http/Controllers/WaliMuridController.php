<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaliMuridController extends Controller
{
    public function index()
    {
        $wali = DB::table('wali_murids')->get();
        return view('wali_murid', ['wali' => $wali]);
    }

    public function destroy($id)
    {
        // Hapus wali murid berdasarkan ID
        DB::table('wali_murids')->where('id', $id)->delete();
        // Redirect ke halaman wali murid index dengan pesan sukses
        return redirect()->route('wali.index')->with('success', 'Data wali murid berhasil dihapus.');
    }

    public function create()
    {
        return view('wali_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required',
    ]);

    DB::table('wali_murids')->insert([
        'nama_wali' => $request->nama_wali,
        'kontak' => $request->kontak,
    ]);

    return redirect()->route('wali.index')->with('success', 'Data wali berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $wali = DB::table('wali_murids')->where('id', $id)
        ->first();
        return view('wali_form', compact('wali'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required',
            'kontak' => 'required',
        ]);

        $wali = DB::table('wali_murids')
        ->where('id', '=', $request->id)
        ->update([
            'nama_wali' => $request->nama_wali,
            'kontak' => $request->kontak,
        ]);

        return redirect()->route('wali.index');
    }
}
