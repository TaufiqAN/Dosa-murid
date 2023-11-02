<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\GuruBK;
use App\Models\ListPelamggaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_aksi',
        'nis_siswa',
        'tanggal',
        'waktu',
        'kode_bk',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_siswa', 'nis');
    }

    public function guruBK()
    {
        return $this->belongsTo(GuruBK::class, 'kode_bk', 'kode_bk');
    }
    public function listPelanggaran()
    {
        return $this->hasMany(ListPelamggaran::class, 'kode_aksi', 'kode_aksi')->with('pelanggaran');
    }
}
