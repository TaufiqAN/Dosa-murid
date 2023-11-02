<?php

namespace App\Models;
use App\Models\Aksi;
use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListPelamggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_aksi',
        'kode_pelanggaran',
        'keterangan',
    ];

    public function aksi()
    {
        return $this->belongsTo(Aksi::class, 'kode_aksi', 'kode_aksi');
    }

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class, 'kode_pelanggaran', 'kode_pelanggaran');
    }
}
