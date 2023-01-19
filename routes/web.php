<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupAssetController;

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


Route::get('/home', function () {
    return view('Template.beranda');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Route Modul Master
Route::get('/groupAsset', 'GroupAssetController@index')->name('groupAsset');
Route::get('/departement', 'departementController@index')->name('departement');
Route::get('/jabatan', 'jabatanController@index')->name('jabatan');
Route::get('/dataKaryawan', 'dataKaryawanController@index')->name('dataKaryawan');
Route::get('/satuan', 'satuanController@index')->name('satuan');
Route::get('/supplier', 'supplierController@index')->name('supplier');

// CRUD groupAsset
Route::post('/simpangroupAsset', 'groupAssetController@store')->name('simpangroupAsset');



//Route Modul Transaksi
Route::get('/listAsset', 'listAssetController@index')->name('listAsset');
Route::get('/historyAsset', 'historyAssetController@index')->name('historyAsset');

//Route Modul Report
Route::get('/reportDepresiasi', 'reportDepresiasiController@index')->name('reportDepresiasi');
Route::get('/reportJurnal', 'reportJurnalController@index')->name('reportJurnal');
Route::get('/reportDaftarAsset', 'reportDaftarAssetController@index')->name('reportDaftarAsset');
Route::get('/reportDataKaryawan', 'reportDataKaryawanController@index')->name('reportDataKaryawan');
Route::get('/reportPenghapusanAsset', 'reportPenghapusanAssetController@index')->name('reportPenghapusanAsset');

//Route SignIn SignUp ResetPassword
Route::get('/signIn', 'signInController@index')->name('signIn');
Route::get('/signUp', 'signUpController@index')->name('signUp');
Route::get('/resetPass', 'resetPassController@index')->name('resetPass');
