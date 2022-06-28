<?php

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
    return view('home', [
        "title" => "Home",
        "imageutm" => "utm.png",
        "imagehimatif" => "himatif.png"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "imagePeople" => "alq.jpeg",
        "nama" => "Dewi Imani Al Qurani",
        "ttl" => "Probolinggo, 15 Agustus 2001",
        "jk" => "perempuan",
        "agama" => "Islam",
        "negara" => "Indonesia",
        "alamat" => "Dusun Sabtuan, Rt 02, Rw 01, Desa Bulujaran Lor, Kecamatan Tegalsiwalan, Kabupaten Probolinggo",
        "noHp" => "082247342238",
        "email" => "imanialqurani1508@gmail.com",
        "ig" => "dewialqurani"
        
    ]);
});

Route::get('/tugas-pendahuluan', function () {
    return view('pendahuluan', [
        "title" => "Tugas Pendahuluan",
        "prak6"=> "Tugas Pendahuluan Modul6"
    ]);
});
