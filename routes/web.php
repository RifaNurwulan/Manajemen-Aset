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
Route::get('/editgroupasset/{id}', 'groupAssetController@edit')->name('editgroupasset');
Route::post('/updategroupasset', 'groupAssetController@update')->name('updategroupasset');
Route::post('/deletegroupasset', 'groupAssetController@destroy')->name('deletegroupasset');

// CRUD departement
Route::post('/simpandepartement', 'departementController@store')->name('simpandepartement');
Route::get('/editdepartement/{id}', 'departementController@edit')->name('editdepartement');
Route::post('/updatedepartement', 'departementController@update')->name('updatedepartement');
Route::post('/deletedepartement', 'departementController@destroy')->name('deletedepartement');

// CRUD jabatan
Route::post('/simpanJabatan', 'jabatanController@store')->name('simpanJabatan');
Route::get('/editjabatan/{id}', 'jabatanController@edit')->name('editjabatan');
Route::post('/updatejabatan', 'jabatanController@update')->name('updatejabatan');
Route::post('/deletejabatan', 'jabatanController@destroy')->name('deletejabatan');

// CRUD Data Karyawan
Route::post('/simpandataKaryawan', 'dataKaryawanController@store')->name('simpandataKaryawan');
Route::get('/editdatakaryawan/{id}', 'dataKaryawanController@edit')->name('editdatakaryawan');
Route::post('/updatedatakaryawan', 'dataKaryawanController@update')->name('updatedatakaryawan');
Route::post('/deletedatakaryawan', 'dataKaryawanController@destroy')->name('deletedatakaryawan');
Route::get('/dataKaryawan/search', 'dataKaryawanController@search');

// CRUD Satuan
Route::post('/simpanSatuan', 'satuanController@store')->name('simpanSatuan');

// CRUD Supplier
Route::post('/simpanSupplier', 'supplierController@store')->name('simpanSupplier');
Route::get('/editSupplier', 'supplierController@edit')->name('editSupplier');
Route::post('/updateSupplier', 'supplierController@update')->name('updateSupplier');
Route::get('/supplier/search', 'supplierController@search');

//Route Modul Transaksi
Route::get('/listAsset', 'listAssetController@index')->name('listAsset');
Route::post('/simpanlistAsset', 'listAssetController@store')->name('simpanlistAsset');
Route::get('/editlistAsset/{id}', 'listAssetController@edit')->name('editlistasset');
Route::post('/updatelistAsset', 'listAssetController@update')->name('updatelistasset');
Route::post('/deletelistAsset', 'listAssetController@destroy')->name('deletelistasset');
Route::get('/listAsset/search', 'listAssetController@search');

//Route Modul Report
Route::get('/historyAsset', 'historyAssetController@index')->name('historyAsset');
Route::get('/reportDepresiasi', 'reportDepresiasiController@index')->name('reportDepresiasi');
Route::get('/reportJurnal', 'reportJurnalController@index')->name('reportJurnal');
Route::get('/reportDaftarAsset', 'reportDaftarAssetController@index')->name('reportDaftarAsset');
Route::get('/reportDataKaryawan', 'reportDataKaryawanController@index')->name('reportDataKaryawan');
Route::get('/reportPenghapusanAsset', 'reportPenghapusanAssetController@index')->name('reportPenghapusanAsset');

//Route SignIn SignUp ResetPassword
Route::get('/signIn', 'signInController@index')->name('signIn');
Route::get('/signUp', 'signUpController@index')->name('signUp');
Route::get('/resetPass', 'resetPassController@index')->name('resetPass');
