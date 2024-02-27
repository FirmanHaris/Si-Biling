<?php

namespace App\Http\Controllers;

use App\Models\Detail_kelas;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DetailKelasController extends Controller
{
    public function index($id_kelas)
    {

        $siswa = Siswa::with('Detail_kelas')->get();
        $kelas = Kelas::with('Detail_Kelas');
        $detail = Detail_kelas::where('id_kelas', $id_kelas)->with('siswa')->get();
        return view('backend.bk.detail_kelas', compact('siswa', 'detail', 'kelas'));
    }

    // menampilkan siswa berdasarkan id kelas
    // public function kelaskatagori($kelas)
    // {

    //     $siswa = Siswa::get();
    //     $kelas = Kelas::get();
    //     $detail = Detail_kelas::where('id_kelas', $kelas)->with('siswa')->get();
    //     return view('backend.bk.detail_kelas', compact('kelasall', 'siswa', 'kelas'));
    // }


    public function insertdetail(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);
        // dd($request);
        try {

            $data = new Detail_kelas();
            $data->siswa->nama = $request->siswa->nama;


            $data->save();
            return redirect('detailkelas')->with(['msg' => 'Data Berhasil Ditambah', 'type' => 'success']);
        } catch (\Exception $e) {
            return redirect('dataguru')->with(['msg' => $e . 'Data Gagal Ditambah ', 'type' => 'error']);
        }
    }
}
