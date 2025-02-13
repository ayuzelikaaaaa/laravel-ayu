<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return view('welcome');

    // memanggil secara langsung
});

Route::get('home/{nama?}', function (Request $request) {
    $nama = $request ->nama;
    return view('home', compact('nama'));
})->name('home');

Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');



// get = mengarahkan ke halaman/menampilkan data

Route::get('add-siswa', [SiswaController::class, 'add'])->name('siswa.add');


Route::post('add-siswa', [SiswaController::class, 'store'])->name('siswa.add.process');

// post = biasanya digunakan untuk mengrim data yang sensitif

// route post akan mengupdate jika ada user yang mengakses url dengan nama add-siswa,
// lalu akan mengarah ke siswacontroller kemudian menjalankan fungsi yang bernama store


Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.delete');

// delete = biasanya digunakan untuk menghapus data sesuai id

Route::get('siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('siswa/edit/{id}', [SiswaController::class, 'update'])->name('siswa.update');

// put = biasanya digunakan untuk merubah/update data sesuai id

Route::get('about', function(){
    return view('about');
})->name('about');
