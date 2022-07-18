<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function program()
    {
        $program = [
            'navbar' => ['Beranda', 'Berita', 'Tentang'],
            'navbar_b' => ['Olahraga', 'Politik', 'Berita'],
            'navbar_o' => ['Sepak Bola', 'Bulu Tangkis'],
        ];
        return view('latihan.program', ['programs' => $program]);
    }

    public function mahasiswa()
    {
        $mahasiswa = [
            ['id' => '1', 'id_dosen' => '1', 'nama' => 'Muhammad Soleh', 'nilai' => 78],
            ['id' => '2', 'id_dosen' => '1', 'nama' => 'Jujun Junaedi', 'nilai' => 85],
            ['id' => '3', 'id_dosen' => '1', 'nama' => 'Mamat Alkatiri', 'nilai' => 90],
            ['id' => '4', 'id_dosen' => '1', 'nama' => 'Ubay Holin', 'nilai' => 87],
            ['id' => '5', 'id_dosen' => '1', 'nama' => 'Fadillah', 'nilai' => 95],
            ['id' => '8', 'id_dosen' => '2', 'nama' => 'Akid Hendra', 'nilai' => 50],
            ['id' => '7', 'id_dosen' => '2', 'nama' => 'Brono Kasmir', 'nilai' => 90],
            ['id' => '6', 'id_dosen' => '2', 'nama' => 'Alfred McTomminay', 'nilai' => 67],
            ['id' => '9', 'id_dosen' => '2', 'nama' => 'Dany Irawan', 'nilai' => 70],
            ['id' => '10', 'id_dosen' => '2', 'nama' => 'Chandra Megra Putra', 'nilai' => 60],
        ];
        return view('latihan.mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function tv()
    {
        $tv = [
            [
                'nama' => 'NET TV',
                'acara' => ['One Championship', 'Comedy Night Live'],
                'tayang' => ['00.30 - 01.30', '21.00 - 22.00'],
                'tg' => ['5 Agustus 2022', 'Senin - Sabtu'],
            ],
            [
                'nama' => 'TVRI',
                'acara' => ['Paula And Friends', 'Anak Indonesia'],
                'tayang' => ['07.30 - 08.00', '08.30 - 09.00'],
                'tg' => ['Senin - Sabtu', 'Setiap Kamis'],
            ],
            [
                'nama' => 'BEINSPORT',
                'acara' => ['Atalanta vs Real Salt Lake', 'Liverpool vs Arsenal'],
                'tayang' => ['23.30 - 00.30', '23.30 - 00.30'],
                'tg' => ['12 Okt 2022', '13 Okt 2022'],
            ],
            [
                'nama' => 'Ochannel',
                'acara' => ['The Immortal', 'MATERIAL'],
                'tayang' => ['15.30 - 16.30', '13.30 - 14.30 '],
                'tg' => ['22 Okt 2022', '20 Okt 2022'],
            ],
            [
                'nama' => 'Indosiar',
                'acara' => ['Azab', 'Cahaya Ilahi'],
                'tayang' => ['07.30 - 09.00', '13.30 - 14.30'],
                'tg' => ['Senin - Sabtu', 'Setiap Hari'],
            ],
        ];

        return view('latihan.acara', ['tv' => $tv]);
    }

    public function challenge()
    {
        // Array '$alfian'
        $belanja = [
            [
                'nama' => 'Alfian',
                'barang' => ['Sepatu', 'Baju', 'Celana', 'Kupluk'],
                'harga' => [250000, 100000, 150000, 100000],
            ],
            [
                'nama' => 'Dida',
                'barang' => ['Topi', 'Baju', 'Celana'],
                'harga' => [100000, 75000, 125000],
            ],
        ];
        return view('latihan.challenge', ['belanja' => $belanja]);

    }
}