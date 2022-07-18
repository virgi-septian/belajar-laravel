<?php

namespace App\Http\Controllers;

class PengenalanController extends Controller
{
    //
    public function pengenalan()
    {
        $nama = "Virgi Septian";
        $umur = "18";
        return view('pages1.pengenalan', compact('nama', 'umur'));
    }

    public function intro($nama, $alamat, $umur)
    {
        return view('pages1.intro', compact('nama', 'alamat', 'umur'));
    }

    public function siswa()
    {
        $a = [
            [
                'id' => '1',
                'nama' => 'Safitri',
                'umur' => '17',
                'kelas' => 'XII RPL 1',
                'mapel' => ['B. Indonesia', 'B. Inggris'],
            ],
            [
                'id' => '2',
                'nama' => 'Surya',
                'umur' => '17',
                'kelas' => 'XII RPL 3',
                'mapel' => ['MTK', 'IPA'],
            ],
            [
                'id' => '3',
                'nama' => 'Rohesa',
                'umur' => '17',
                'kelas' => 'XII RPL 3',
                'mapel' => ['SIMDIG', 'SUNDA'],
            ],
            [
                'id' => '4',
                'nama' => 'Risnadia',
                'umur' => '16',
                'kelas' => 'XII RPL 3',
                'mapel' => ['Fisika', 'KWU'],
            ],
            [
                'id' => '5',
                'nama' => 'Riefky',
                'umur' => '18',
                'kelas' => 'XII RPL 2',
                'mapel' => ['PAI', 'AL-qur`an'],
            ],

        ];
        return view('pages1.siswa', ['siswa' => $a]);
    }
}
