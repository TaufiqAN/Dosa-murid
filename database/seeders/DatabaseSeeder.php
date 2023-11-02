<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aksi;
use App\Models\GuruBK;
use App\Models\Jurusan;
use App\Models\ListPelamggaran;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            KelasnSeeder::class,
            GuruBKSeeder::class,
            PelanggaranSeeder::class,
        ]);

        Siswa::factory(100)->create();
        Aksi::factory(30)->create();
        ListPelamggaran::factory(95)->create();
    }
}
