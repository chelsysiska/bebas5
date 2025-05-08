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
}
