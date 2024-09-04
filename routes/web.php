<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertamaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\BukuController;






// MODUL 3
route::get('/', function () {
    return view('userpage.welcome');
})->name('userpage');

route::get('/manipulasi_dom', function () {
    return view('modul4.manipulasi_dom');
})->name('manipulasi_dom');
route::get('/effects', function () {
    return view('modul4.effects');
})->name('effects');
route::get('/ajax', function () {
    return view('modul4.ajax');
})->name('ajax');
route::get('/ajax2', function () {
    return view('modul4.ajax2');
})->name('ajax');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::prefix('dashboard/master')->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class)->except(['show']);
    Route::resource('kategori_buku', KategoriBukuController::class);
    Route::resource('buku', BukuController::class);
});
});

Route::get('/login', [LoginController::class, 'indexlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'indexregister'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// MODUL 2
Route::get('/hello', function () {
    return ('hello word ');
});

Route::get('/user/{id}', function (string $id) {
    return 'user     ' . $id;
});

Route::get('/username/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/satu', [PertamaController::class, 'satu']);
Route::get('/dua', [PertamaController::class, 'dua']);
Route::get('/tiga/{id}', [PertamaController::class, 'tiga']);

Route::get('/user/profile', function () {})->name('profile');

Route::get('/profile', function () {
    return redirect()->route('profile');
});

Route::get('/user4/{id}', function (string $id) {
    echo "Tampilkan Angka : " . $id;
})->where('id', '[0-9]+');

Route::get('/user4/{nama}', function (string $nama) {
    echo "Tampilkan Nama : " . $nama;
})->where('nama', '[A-Za-z]+');

Route::prefix('admin')->group(function () {
    Route::get('/user', function () {
        echo 'tes group user';
    });
    Route::get('/admin', function () {
        echo 'tes group admin';
    });
});

// Route::get('profile', function () {

// })->middleware('cek.umur:18');

// Route::midleware(['auth', 'cek.umur:18'])->group(function () {
//     Route::get('/dashboard', function () {
//     });

//      Route::get('/settings', function () {

//     });
// });
