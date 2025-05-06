<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
       $siswa = DB::table('siswa')
            ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id')
            ->join('wali_murids', 'siswa.wali_murid_id', '=', 'wali_murids.id')
            ->select('siswa.*', 'kelas.nama_kelas', 'wali_murids.nama_wali')
            ->get();

        return view('siswa', ['siswa' => $siswa]);
    }

    public function destroy($id)
    {
        $siswa = DB::table('siswa')
        ->where('id', '=', $id)
        ->delete();

        return redirect('/');
    }

    public function create()
    {
        $kelas = DB::table('kelas')->get();
        $wali = DB::table('wali_murids')->get();
        return view('siswa_form', ['wali' => $wali, 'kelas' => $kelas]);
    }

    public function store( Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa',
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'id_kelas' => 'required',
            'wali_murid_id' => 'required'
        ]);

        DB::table('siswa')->insert([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'id_kelas' => $request->id_kelas,
            'wali_murid_id' => $request->wali_murid_id
        ]);
    }
    
}
