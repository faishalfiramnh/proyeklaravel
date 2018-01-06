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

Route::get('/login/{id}','AdminController@indexr');

Route::get('/ppp/{no}','AdminController@show');

Route::get('/orm','HomeCon@tampilKelas');

Route::get('/ormPanggilId/{id}','HomeCon@denganID');

Route::get('/ttt', function(){
	return view('login/LoginAdminView');
});

Route::get('/Kelas','KelasCon@tampilSemuaIsiKelas');

Route::get('/Kelas/create','KelasCon@tambahKelas'); //metode create hanyu berpengaruh untuk pemanggilan tidak function
Route::post('/Kelas','KelasCon@tambahKelasPost');

Route::get('/Kelas/{id}/editKelas','KelasCon@editKelas');
Route::put('/Kelas/{id}','KelasCon@editKelasPut');
Route::delete('/Kelas/{id}','KelasCon@hapus');

//@index = nama metode yang diambil dari controller

Route::get('/User','KetuaKelasCon@tampilUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/data-kelas', 'HomeController@dataKelas');