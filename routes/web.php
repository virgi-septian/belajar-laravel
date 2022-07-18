<?php
use App\Http\Controllers\companyController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    echo "<center>";
    echo "<u>Hello semuanya, apa kabar</u> <br>";
    echo "<u>Pada Kali ini kita sedang belajar route basic</u> ";
});

Route::get('/home', function () {
    return view('home');
});

// pages 1
Route::get('/pages1', function () {
    return view('pages1.index');
});
Route::get('/biodata2/{nama}', function ($nama) {
    return view('pages1.biodata', compact('nama'));
});
Route::get('/pesanan2/{minuman?}', function ($minuman = 'kosong') {
    return view('pages1.pesanan', compact('minuman'));
});

// pages2
Route::get('/pages2', function () {
    return view('pages2.index2');
});

// pages3
Route::get('/pages3', function () {
    return view('pages3.index3');
});

// latihan
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}', function ($nama,
    $umur, $alamat, $jenis_kelamin, $hobby) {
    return view('latihan.biodata', compact(
        'nama',
        'umur',
        'alamat',
        'jenis_kelamin',
        'hobby'
    ));
});

Route::get('/pesanan/{produk?}/{produk2?}', function (
    $produk = 'Mohon maaf material anda tidak ada',
    $produk2 = 'Mohon maaf material anda tidak ada', ) {
    return view('latihan.pesanan', compact(
        'produk', 'produk2'
    ));
});

Route::get('/pengenalan', [App\Http\Controllers\PengenalanController::class, 'pengenalan']);
Route::get('/intro/{nama}/{alamat}/{umur}', [PengenalanController::class, 'intro']);
Route::get('/siswa', [App\Http\Controllers\PengenalanController::class, 'siswa']);
Route::get('/program', [LatihanController::class, 'program']);
Route::get('/mahasiswa', [LatihanController::class, 'mahasiswa']);
Route::get('/acara', [LatihanController::class, 'tv']);
Route::get('/challenge', [LatihanController::class, 'challenge']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/company', [companyController::class, 'company']);