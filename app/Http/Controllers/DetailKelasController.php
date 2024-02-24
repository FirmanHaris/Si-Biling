<?php

namespace App\Http\Controllers;

use App\Models\Detail_kelas;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DetailKelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $detail_kelas = Detail_kelas::with('kelas', 'siswa')->get();
        return view('backend.bk.detail_kelas', compact('kelas', 'siswa', 'detail_kelas'));
    }
}
