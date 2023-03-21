<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupAssetController;
use App\Http\Controllers\inputUserController;

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

Route::get('/login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin')->name('login.post'); 
Route::get('registration', 'AuthController@registration')->name('register');
Route::post('post-registration', 'AuthController@postRegistration')->name('register.post'); 
Route::post('resetpassword', 'AuthController@postresetpassword')->name('resetpassword');
//Route::post('post-resetpassword', 'AuthController@postResetpassword')->name('resetpassword.post'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout')->name('logout');



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
Route::get('/pelepasanAsset', 'statusPelepasanController@index')->name('pelepasanAsset');

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

// CRUD Status Pelepasan
Route::post('/simpanStatus', 'statusPelepasanController@store')->name('simpanStatus');
Route::post('/updateStatus', 'statusPelepasanController@update')->name('updateStatus');
Route::post('/deleteStatus', 'statusPelepasanController@destroy')->name('deleteStatus');

// CRUD Data Karyawan
Route::post('/simpandataKaryawan', 'dataKaryawanController@store')->name('simpandataKaryawan');
Route::get('/editdatakaryawan/{id}', 'dataKaryawanController@edit')->name('editdatakaryawan');
Route::post('/updatedatakaryawan', 'dataKaryawanController@update')->name('updatedatakaryawan');
Route::post('/deletedatakaryawan', 'dataKaryawanController@destroy')->name('deletedatakaryawan');
Route::get('/getKodeNik', 'dataKaryawanController@kode')->name('getKodeNik');
Route::get('/dataKaryawan/search', 'dataKaryawanController@search');

// CRUD Satuan
Route::post('/simpanSatuan', 'satuanController@store')->name('simpanSatuan');
Route::get('/editsatuan/{id}', 'satuanController@edit')->name('editsatuan');
Route::post('/updatesatuan', 'satuanController@update')->name('updatesatuan');
Route::post('/deletesatuan', 'satuanController@destroy')->name('deletesatuan');

// CRUD Supplier
Route::post('/simpanSupplier', 'supplierController@store')->name('simpanSupplier');
Route::get('/editSupplier', 'supplierController@edit')->name('editSupplier');
Route::post('/updateSupplier', 'supplierController@update')->name('updateSupplier');
// Route::get('/supplier/search', 'supplierController@search');
Route::post('/deletesupplier', 'supplierController@destroy')->name('deletesupplier');

//Route Modul Transaksi
Route::get('/listAsset', 'listAssetController@index')->name('listAsset');
Route::get('/getKodeAset', 'listAssetController@kode')->name('getKodeAset');
Route::post('/simpanlistAsset', 'listAssetController@store')->name('simpanlistAsset');
Route::get('/editlistAsset/{id}', 'listAssetController@edit')->name('editlistasset');
Route::post('/updatelistAsset', 'listAssetController@update')->name('updatelistasset');
Route::post('/deletelistAsset', 'listAssetController@destroy')->name('deletelistasset');
<<<<<<< HEAD
Route::post('/fotoListAsset/{id}', 'listAssetController@listFoto')->name('fotoListAsset');
Route::get('/detail/{id_list_aset}', 'listAssetController@detail')->name('detail');
Route::get('/cetakdetail/{id_list_aset}', 'listAssetController@cetakDetail')->name('cetakDetail');
Route::get('/kondisi/{id_list_aset}', 'listAssetController@kondisi')->name('kondisi');
Route::put('/updatePerbaikan', 'listAssetController@updatePerbaikan')->name('updatePerbaikan');
Route::delete('/deletePerbaikan/{id_pemeliharaan}', 'listAssetController@deletePerbaikan')->name('deletePerbaikan');
Route::get('/log/{id_list_aset}', 'listAssetController@log')->name('log');
//Route::post('/simpanPerbaikan', 'pemeliharanAssetController@store')->name('simpanPerbaikan');
Route::post('/simpanPerbaikan', 'listAssetController@perbaikan')->name('simpanPerbaikan');
Route::get('/upload', 'UploadlistassetController@upload');
Route::post('/upload/proses', 'UploadlistassetController@proses_upload');
Route::post('/detaillistAsset', 'listAssetController@update')->name('detaillistasset');
Route::get('/listAsset/search', 'listAssetController@search')->name('listAsset.search');
Route::get('/cetak-listAsset-pertanggal/{tglawal}/{tglakhir}', 'listAssetController@cetakListAssetPertanggal')->name('cetak-listAsset-pertanggal');


=======
<<<<<<< HEAD
Route::post('/fotoListAsset/{id}', 'listAssetController@listFoto')->name('fotoListAsset');
Route::get('/upload', 'UploadlistassetController@upload');
Route::post('/upload/proses', 'UploadlistassetController@proses_upload');
Route::post('/detaillistAsset', 'listAssetController@update')->name('detaillistasset');
=======
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
Route::get('/listAsset/search', 'listAssetController@search');
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc

//Route Modul Report
Route::get('/historyAsset', 'reportHistoryController@index')->name('historyAsset');
Route::get('/cetak-logAsset-pertanggal/{tglawal}/{tglakhir}', 'reportHistoryController@cetakLogAssetPertanggal')->name('cetak-logAsset-pertanggal');
Route::get('/reportDepresiasi', 'reportDepresiasiController@index')->name('reportDepresiasi');
Route::get('/reportJurnal', 'reportJurnalController@index')->name('reportJurnal');
Route::get('/reportDaftarAsset', 'reportDaftarAssetController@index')->name('reportDaftarAsset');
Route::get('/reportDataKaryawan', 'reportDataKaryawanController@index')->name('reportDataKaryawan');
Route::get('/cetak-dataKaryawan-pertanggal/{tglawal}/{tglakhir}', 'reportDataKaryawanController@cetakDataKaryawanPertanggal')->name('cetak-dataKaryawan-pertanggal');
Route::get('/reportPenghapusanAsset', 'reportPenghapusanAssetController@index')->name('reportPenghapusanAsset');
Route::get('/previewPenghapusanAsset/preview', 'reportPenghapusanAssetController@preview')->name('previewDaftarAsset');
Route::get('/previewDataKaryawan/preview', 'reportDataKaryawanController@preview')->name('previewDataKaryawan');
Route::get('/previewDaftarAsset/preview', 'reportDaftarAssetController@preview')->name('previewDaftarAsset');
Route::get('/previewHistoryAsset/preview', 'reportHistoryController@preview')->name('previewHistoryAsset');
Route::get('/cetak-hapusAsset-pertanggal/{tglawal}/{tglakhir}', 'reportPenghapusanAssetController@cetakHapusAssetPertanggal')->name('cetak-hapusAsset-pertanggal');
//Route Report Data Karyawan
// Route::get('/reportDataKaryawan', 'reportDataKaryawanController@previewForm')->name('reportDataKaryawan');
// Route::get('/previewpertanggal', 'reportDataKaryawanController@index')->name('previewDataKaryawan');
// Route::get('/previewpertanggal/{tglawal}/{tglakhir}', [App\Http\Controllers\reportDataKaryawanController::class, 'previewPertanggal'])->name('previewpertanggal');
//Route Report Data Asset
Route::get('/reportDaftarAsset', 'reportDaftarAssetController@index')->name('reportDaftarAsset');
// Route::get('/previewPertanggal', 'reportDaftarAssetController@index')->name('reportDaftarAsset');
// Route::get('/previewPertanggal/{tglawal}/{tglakhir}', [App\Http\Controllers\reportDaftarAssetController::class, 'previewPertanggal'])->name('previewPertanggal');


//Route halaman Profile
Route::get('/profile', 'profileController@index')->name('profile');

//Route SignIn SignUp ResetPassword
Route::get('/signIn', 'signInController@index')->name('signIn');
Route::get('/signUp', 'signUpController@index')->name('signUp');
Route::get('/resetPass', 'resetpassController@index')->name('resetpass');
<<<<<<< HEAD
=======

//Send Email
Route::get('/sendemail', 'KirimEmailController@index')->name('sendemail');
Route::get('/kirim', 'KirimEmailController@kirim')->name('kirim');
Route::post('kirim','KirimEmailController@kirim')->name('kirim');
// Route::get('/formemail', [KirimEmailController::class, 'index']);
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc

//Send Email
Route::get('/sendemail', 'KirimEmailController@index')->name('sendemail');
Route::get('/kirim', 'KirimEmailController@kirim')->name('kirim');
Route::post('kirim','KirimEmailController@kirim')->name('kirim');
// Route::get('/formemail', [KirimEmailController::class, 'index']);

//input User
Route::get('/inputuser', 'inputUserController@index')->name('inputuser');
Route::post('/simpanUser', 'inputUserController@store')->name('simpanUser');
Route::post('/updateUser', 'inputUserController@update')->name('updateUser');
Route::post('/deleteUser', 'inputUserController@destroy')->name('deleteUser');
//Route::post('/simpanUser', 'inputUserController@store')->name('simpanUser');

//Route halaman Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/password', 'PasswordController@index')->name('password.index');
    Route::put('/password', 'PasswordController@update')->name('password.update');
});

///qrcode
Route::get('/qrcode/{id}', 'QrCodeController@generate')->name('generate');
Route::get('/qrcodeView/{id}', 'QrCodeController@generateView')->name('generateView');
Route::get('/qrcodeurl/{id}', 'QrCodeController@showing')->name('showing');
Route::get('/qrcodeshow/{id}', 'QrCodeController@showView')->name('showView');