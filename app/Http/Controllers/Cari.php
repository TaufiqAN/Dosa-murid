<?php

namespace App\Http\Controllers;

use App\Models\Aksi;
use App\Models\GuruBK;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class cari extends Controller
{
    public function cari()
    {
        return view('cari');
    }

    public function hasil(Request $request)
    {
        $nis = $request->nis;
        $aksi = Aksi::all();
        $totalpoint = $this->totalpoint($nis);
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        return view('hasil', compact('nis', 'siswa', 'totalpoint', 'aksi'));
    }

    public function totalPoint(int $nis) : int
    {
        $siswa = Siswa::where('nis', $nis)->with('aksi.listPelanggaran.pelanggaran')->first();
        $total = 0;

        if ($siswa == null) {
            return $total;
        }

        foreach($siswa->aksi as $aksi){
            foreach($aksi->listPelanggaran as $list){
                $total += $list->pelanggaran->poin;
            }
        }

        return $total;
    }
}