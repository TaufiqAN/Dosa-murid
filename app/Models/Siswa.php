<?php

namespace App\Models;

use App\Models\Kelasn;
use App\Models\Aksi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nisn',
        'nis',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'kode_kelas',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelasn::class, 'kode_kelas', 'kode_kelas')->with('jurusan');
    }

    public function aksi()
    {
        return $this->hasMany(Aksi::class, 'nis_siswa', 'nis')->with('guruBK', 'ListPelanggaran');
    }
}
