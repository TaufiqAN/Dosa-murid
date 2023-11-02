<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            "kode_jurusan" => "RPL",
            "nama_jurusan" => "Rekayasa Perangkat Lunak",
        ]);
        Jurusan::create([
            "kode_jurusan" => "OTKP",
            "nama_jurusan" => "Otomatisasi Tata Kelola Perkantoran",
        ]);
        Jurusan::create([
            "kode_jurusan" => "PM",
            "nama_jurusan" => "Pemasaran",
        ]);
        Jurusan::create([
            "kode_jurusan" => "TO",
            "nama_jurusan" => "Teknik Otomotif",
        ]);
        Jurusan::create([
            "kode_jurusan" => "AKL",
            "nama_jurusan" => "Akutansi dan Keuangan Lembaga",
        ]);
    }
}
