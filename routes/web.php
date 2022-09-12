<?php

use App\Helpers\Helper;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FastLinkController;
use App\Http\Controllers\HalamanMenuController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\ProfileWebsiteController;
use App\Http\Controllers\SurveyKepuasanController;
use App\Http\Controllers\TagBeritaController;
use App\Models\Banner;
use App\Models\Menu;
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
    return view('tlandingpage.index');
});
Route::get('/test', function () {
    return Helper::test();
});
// Route::get('/categories', function () {
//     $category = Menu::tree()->get()->toTree();
//     return view('categories', [
//         'categories' => $category
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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
    Route::resource('Banner', Banner::class);
    Route::resource('ProfileWebsite', ProfileWebsiteController::class);
    Route::resource('HalamanMenu', HalamanMenuController::class);
});
// Route::get('admin/cara-pemesanan', [GeneralController::class, 'pemesanan'])->name('pemesanan');

require __DIR__.'/auth.php';
