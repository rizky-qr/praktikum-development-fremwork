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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "<h1>halaman about</h1>";
// });

// Route::get('/nama/{saya}', function ($saya) {
//     return "Nama Saya : $saya";
// });

// Route::get('/v1', function () {
//     return view('v1');
// });

// Route::get('/v2', function () {
//     return view('v2');
// });

// Route::get('/v3', function () {
//     return view('v3', ["nama" => "Rizky"]);
// });

// Route::get('/v4', function () {
//     return view('v4', ["nama1" => "Rizky", "nama2" => "dua", "nama3" => "salah", "nama4" => "benar",]);
// });


// //pertemuan 2


// // Route::get('/siswa', function () {
// //     return view('siswa', ["siswa" => "Rizky", "nilai" => 75]);
// // });

// Route::get('/loop', function () {
//     return view('loop');
// });

// Route::get('/data', function () {
//     return view('data', ["data" => ["Rizky", "dua",  "salah", "benar",]]);
// });


// //layout

// Route::get('/home', function () {
//     return view('layout\home');
// });

// Route::get('/about', function () {
//     return view('layout.about');
// });

// Route::get('/layout', function () {
//     return view('layout.layout');
// });
// Route::get('/layout', function () {
//     return view('layout.layout');
// });


// // //pertemuan 3
// // Route::get('/page', 'PageController@index');
// Route::get('/test/loop', 'PageController@loop');
// // Route::get('/test/siswa', 'PageController@siswa');







//tugas
// Route::get('/siswa', 'PageController@ujian');

// pert4

// Route::get('/reg', 'PendaftaranController@index');

// Route::post('/proses-reg', 'PendaftaranController@proses_reg');






// Route::get('/calculator', 'CalculatorController@index');

// Route::post('/hasil', 'CalculatorController@Hasil');

// Route::get('/post', 'PostController@index');
// Route::post('/tambah', 'PostController@tambah');
// Route::post('/insertpost', 'PostController@insertpost');
// Route::get('/selectpost', 'PostController@selectpost');
// Route::get('/updatepost', 'PostController@updatepost');
// Route::get('/deletepost', 'PostController@deletepost');


Route::get('/formAdd', 'ProdukController@formAdd');
Route::post('/insertProduk', 'ProdukController@insertProduk');
Route::get('/selectProduk', 'ProdukController@selectProduk');
Route::get('/updateProduk', 'ProdukController@updateProduk');
Route::get('/deleteProduk', 'ProdukController@deleteProduk');
