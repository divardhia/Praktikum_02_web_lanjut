<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

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
/** praktikum 1 */
// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/about', function () {
//     return "194170184 Diva Ardhia";
// });

// Route::get('/articles/{id}', function ($id) {
//     return "Halaman Artikel dengan ID ".$id;
// });

/** praktikum 2 */
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about'] );

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// modifikasi
// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about'] );

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

/** praktikum 3 */
// halaman home
// Route::get('/home', [ProductController::class, 'home']);

// // halaman products
// Route::prefix('/product')->group(function() {
//     Route::get('/', [ProductController::class, 'product']);
//     Route::get('/eduGames', [ProductController::class, 'eduGames']);
//     Route::get('/kidsGames', [ProductController::class, 'kidsGames']);
//     Route::get('/storyBooks', [ProductController::class, 'storyBooks']);
//     Route::get('/songs', [ProductController::class, 'songs']);
// });

// News
// NB : jika memasukkan id = 1 pada url maka akan masuk ke halaman daftar berita
// jika memasukkan id selain 1 pada url maka akan masuk ke halaman berita
// Route::get('/news/{id}', [ProductController::class, 'news']);

// Program
// Route::prefix('/program')->group(function() {
//     Route::get('/', [ProductController::class, 'program']);
//     Route::get('/karir', [ProductController::class, 'karir']);
//     Route::get('/magang', [ProductController::class, 'magang']);
//     Route::get('/kunjungan', [ProductController::class, 'kunjungan']);
// });

// About us
Route::get('/about', [ProductController::class, 'about'] );

// Contact us
Route::resource('contact', ContactController::class)->only([
    'index'
]);

