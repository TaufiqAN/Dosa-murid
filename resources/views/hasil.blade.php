<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-200">

    <div class=" bg-black text-4xl text-white py-10">
        <div class="container mx-auto text-center">
            <h2>DOSA Murid | Hasil Pencatatan Pelanggaran Murid </h2>
        </div>
    </div>

    <div class="text-xl font-semibold mb-3 mt-4 bg-white rounded-xl p-4 container mx-auto"">NIS YANG DIKIRIM : {{ $nis}}
    </div>

    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto">
        @if ($siswa == null)
        <div class="text-lg text-center">..::SISWA TIDAK DITEMUKAN ::..</div>
        @else
        <div class="flex flex-wrap justify-center">
            <img src="{{ asset('img\profile2.png')}}" class="w-40" alt="HUwu">
        </div>
            <div class="text-2xl font-semibold mb-3 mt-5 text-center">Nama :{{ $siswa->nama }}</div>
            <div class="text-lg font-semibold mb-3 text-center">NISN     : {{ $siswa->nisn }}</div>
            <div class="text-lg font-semibold mb-3 text-center">Kelas    : {{ $siswa->kelas->nama_kelas }}</div>
            <div class="text-lg font-semibold mb-3 text-center">Jurusan  : {{ $siswa->kelas->jurusan->nama_jurusan }}</div>
            <div class="text-lg font-semibold mb-3 text-center">Total Point  : {{ $totalpoint }}</div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-lg text-left text-gray-500 ">
                    <thead class="text-black uppercase bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kode
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pelanggaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Hapus..??
                            </th>
                        </tr>
                    </thead>
                    @foreach ($aksi as $aksi)
                        
                   
                    @foreach ($aksi->listPelanggaran as $pelanggaran)
                    <tr class="bg-white border-b ">
                        <td class="px-6 py-4">
                            {{ $pelanggaran->kode_pelanggaran }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pelanggaran->pelanggaran->nama_pelanggaran }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pelanggaran->keterangan }}
                        </td>
                    </tr>
                @endforeach
                @endforeach
                </table>
            </div>

        @endif
    </div>

</body>

</html>