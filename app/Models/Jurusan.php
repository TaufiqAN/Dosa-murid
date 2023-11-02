<?php

namespace App\Models;

use App\Models\Kelasn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelasn::class, 'kode_siswa', 'kode_siswa');
    }
}
