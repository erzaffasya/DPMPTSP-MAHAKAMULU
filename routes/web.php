<?php

use App\Helpers\Helper;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FastLinkController;
use App\Http\Controllers\HalamanMenuController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileWebsiteController;
use App\Http\Controllers\SurveyKepuasanController;
use App\Http\Controllers\TagBeritaController;
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

// Route::get('/', function () {
//     return view('tlandingpage.index');
// })->name('home');

// Route::get('/regular', function () {
//     return view('tlandingpage.regular');
// });

// Route::get('/detailBerita', function () {
//     return view('tlandingpage.detailBerita');
// });

// Route::get('/berita', function () {
//     return view('tlandingpage.berita');
// })->name('landingpage-berita');

Route::get('/kontak', function () {
    return view('tlandingpage.kontak');
})->name('kontak');

Route::get('/login2', function () {
    return view('tlandingpage.login');
});

//HalamanMenu
Route::get('detail/{id}', [LandingpageController::class, 'HalamanMenu'])->name('HalamanMenu');
Route::get('sub-menu/{id}', [MenuController::class, 'subMenu'])->name('sub-menu');
Route::get('berita', [LandingpageController::class, 'Berita'])->name('landingpage-berita');
Route::get('detail-berita/{id}', [LandingpageController::class, 'DetailBerita'])->name('detail-berita');
Route::get('detail-pengumuman/{id}', [LandingpageController::class, 'detailPengumuman'])->name('detail-pengumuman');
Route::post('cari-berita', [LandingpageController::class, 'cariBerita'])->name('cari-berita');
Route::get('/', [LandingpageController::class, 'home'])->name('home');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.index');
    // });
    Route::resource('KategoriBerita', KategoriBeritaController::class);
    Route::resource('TagBerita', TagBeritaController::class);
    Route::resource('Berita', BeritaController::class);
    Route::resource('SurveyKepuasan', SurveyKepuasanController::class);
    Route::resource('Menu', MenuController::class);
    
    //Blom
    Route::resource('Pengumuman', PengumumanController::class);
    Route::resource('FastLink', FastLinkController::class);
    Route::resource('Banner', BannerController::class);
    Route::resource('ProfileWebsite', ProfileWebsiteController::class);
    Route::resource('HalamanMenu', HalamanMenuController::class);
});
// Route::get('admin/cara-pemesanan', [GeneralController::class, 'pemesanan'])->name('pemesanan');

require __DIR__.'/auth.php';
