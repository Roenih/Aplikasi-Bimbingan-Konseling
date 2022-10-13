<?php

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

// Route siswa

Route::get('/siswa', 'SiswaController@index')->name('siswa');
Route::get('/tambah-siswa', 'SiswaController@tambah');
Route::post('/store-siswa', 'SiswaController@store');
Route::get('/edit-siswa/{id}', 'SiswaController@edit');
Route::put('/update-siswa/{id}', 'SiswaController@update');
Route::get('/delete-siswa/{id}', 'SiswaController@delete');
Route::get('/detail-siswa/{id}', 'SiswaController@detail');
Route::get('/cetak-siswa', 'SiswaController@TampilanCetak')->name('cetak-siswa');

// Route OrangTua
// Route::get('/OrangTua', 'OrangTuaController@index')->name('OrangTua');
// Route::get('/tambah-OrangTua', 'OrangTuaController@tambah');
// Route::post('/store-OrangTua', 'OrangTuaController@store');
// Route::get('/edit-OrangTua/{id}', 'OrangTuaController@edit');
// Route::put('/update-OrangTua/{id}', 'OrangTuaController@update');
// Route::get('/delete-OrangTua/{id}', 'OrangTuaController@delete');
// Route::get('/detail-OrangTua/{id}', 'OrangTuaController@detail');


// Route jenismasalah
Route::get('/tambah-jenismasalah', 'JenisMasalahController@tambah');
Route::get('/jenismasalah', 'JenisMasalahController@index')->name('jenismasalah');
Route::post('/store-jenismasalah', 'JenisMasalahController@store');
Route::get('/edit-jenismasalah/{id_masalah}', 'JenisMasalahController@edit');
Route::put('/update-jenismasalah/{id_masalah}', 'JenisMasalahController@update');
Route::get('/delete-jenismasalah/{id_masalah}', 'JenisMasalahController@delete');


// Route Bimbingan
Route::get('/bimbingan', 'BimbinganController@index')->name('bimbingan');
Route::get('/tambah-bimbingan', 'BimbinganController@tambah');
Route::post('/store-bimbingan', 'BimbinganController@store');
Route::get('/edit-bimbingan/{nis}', 'BimbinganController@edit');
Route::put('/update-bimbingan/{nis}', 'BimbinganController@update');
Route::get('/delete-bimbingan/{nis}', 'BimbinganController@delete');
Route::get('/detail-bimbingan/{nis}', 'BimbinganController@detail');
Route::get('/cetak-bimbingan','BimbinganController@CetakBimbingan')->name('cetak-bimbingan');
Route::get('/cetak-bimbingan/pdf','BimbinganController@CetakPdfBimbingan');
Route::get('/cetak-bimbingan-pertanggal','BimbinganController@CetakPDFTanggal');


// Route kelas
Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::get('/tambah-kelas', 'KelasController@tambah');
Route::post('/store-kelas', 'KelasController@store');
Route::get('/edit-kelas/{kode_kelas}', 'KelasController@edit');
Route::put('/update-kelas/{kode_kelas}', 'KelasController@update');
Route::get('/delete-kelas/{kode_kelas}', 'KelasController@delete');
Route::get('/detail-kelas/{kode_kelas}', 'KelasController@detail');

// Route Admin
// Route::get('/admin', 'AdminController@index')->name('admin');
// Route::get('/tambah-admin', 'AdminController@tambah');
// Route::post('/store-admin', 'AdminController@store');
// Route::get('/edit-admin/{id_admin}', 'AdminController@edit');
// Route::put('/update-admin/{id_admin}', 'AdminController@update');
// Route::get('/delete-admin/{id_admin}', 'AdminController@delete');
// Route::get('/detail-admin/{id_admin}', 'AdminController@detail');

// Route Beranda
Route::get('/beranda','BerandaController@index')->name('beranda');

// Route Guru
Route::get('/guru', 'GuruController@index')->name('guru');
Route::get('/tambah-guru', 'GuruController@tambah');
Route::post('/store-guru', 'GuruController@store');
Route::get('/edit-guru/{nip}', 'GuruController@edit');
Route::put('/update-guru/{nip}', 'GuruController@update');
Route::get('/delete-guru/{nip}', 'GuruController@delete');
Route::get('/detail-guru/{nip}', 'GuruController@detail');

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/login','AuthController@Login')->name('Login');
Route::get('/logout','AuthController@logout')->name('logout');
Route::post('/postlogin','AuthController@PostLogin');





