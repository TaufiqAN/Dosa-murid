<?php

namespace Database\Seeders;

use App\Models\GuruBK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruBKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuruBK::create([
            'kode_bk' => 'BK001',
            'nama' => 'Syukurillah',
            'nip' => '123456789',
            'alamat' => 'Jl. Raya Bangsri',
            'no_telepon' => '085367855387',
        ]);
        GuruBK::create([
            'kode_bk' => 'BK002',
            'nama' => 'Titik',
            'nip' => '987654321',
            'alamat' => 'Jl. Raya Bangsri',
            'no_telepon' => '083547588386',
        ]);
    }
}
