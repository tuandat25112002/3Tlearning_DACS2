<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\BaihocController;
use App\Http\Controllers\GiaoVienController;
use App\Http\Controllers\TailieuController;
use App\Http\Controllers\LophocController;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GiohangController;
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
Route::get('/home', [App\Http\Controllers\IndexController::class, 'home']);
Route::get('/dashboard/404', function () {
    return view('admin/404');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('/admin');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_Dashboard'])->name('/dashboard');
Route::post('/login_admin', [App\Http\Controllers\AdminController::class, 'login_admin']);
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout']);
Route::get('/thongke', [App\Http\Controllers\AdminController::class, 'ThongKe']);
Route::get('/search', [App\Http\Controllers\AdminController::class, 'search']);
Route::get('danhmuc/lop-{idlop}', [App\Http\Controllers\AdminController::class, 'PhanLop']);
Route::get('/homepage',[IndexController::class,'home']);
Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/sanpham', SanphamController::class);
Route::resource('/baihoc', BaihocController::class);
Route::resource('/giaovien', GiaoVienController::class);
Route::resource('/tailieu',TailieuController::class);
Route::resource('/lophoc', LophocController::class);
Route::resource('/sinhvien', SinhvienController::class);

Route::get('/download/{id}', [TailieuController::class, 'download'])->name('download');

Route::get('/khoa-hoc/{slug}={id}', [IndexController::class, 'khoahoc']);

Route::get('/mon-hoc/{slug}={id}', [IndexController::class, 'danhsachmonhoc']);
Route::get('bai-hoc/{slug}={id}', [IndexController::class, 'baihoc']);

// Auth::routes();

Route::get('/sinhvien/{id}', [SinhvienController::class, 'show']);
Route::get('/timkiemtheolop', [SinhvienController::class, 'timkiemtheolop']);
Route::get('/khoahoc', [IndexController::class, 'tatcakhoahoc']);
Route::get('/lockhoahoc', [IndexController::class, 'lockhoahoc']);
Route::post('register/create', [AccountController::class, 'create']);
Route::post('/register/addinfor', [AccountController::class, 'storeUser']);

//pagination
Route::get('/pagination/fetch_data', [SanphamController::class, 'fetch_data']);
Route::get('/pagination/load_data', [SinhvienController::class, 'fetch_data']);
Route::get('/pagination/load_khoahoc12', [IndexController::class, 'fetch_data12']);
Route::get('/pagination/load_khoahoc11', [IndexController::class, 'fetch_data11']);
Route::get('/pagination/load_khoahoc10', [IndexController::class, 'fetch_data10']);
Route::post('/khoahocnoibat', [SanphamController::class, 'khoahocnoibat']);
Route::get('/lockhoahoc/hien-thi', [IndexController::class, 'ajaxlockhoahoc']);
Route::get('/logout-user',[AccountController::class,'logout']);

//Login facebook
Route::get('/login-facebook', [AdminController::class,'login_facebook']);
// Route::get('/admin/callback',[AdminController::class,'callback_facebook');
//Login  google
Route::get('/login-google',[AdminController::class,'login_google']);
Route::get('/google/callback',[AdminController::class,'callback_google']);
Route::get('/sendmail',[AccountController::class,'sendemail']);



    // Route::any('/confirmemail', function() {
    //     return view('viewmail.viewconfirmemail');
    // });

//login and resgiter
Route::any('login', function() {
    return view('login');
});
Route::any('register', function() {
    return view('register');
});

//upload gg driver
///Document
Route::get('create_document',[DocumentController::class,'create_document']);
Route::get('upload_file',[DocumentController::class,'upload_file']);
Route::get('upload_image',[DocumentController::class,'upload_image']);
Route::get('upload_video',[DocumentController::class,'upload_video']);
///Folder
Route::get('create_folder',[DocumentController::class,'create_folder']);

Route::post('/confirmcode',[AccountController::class,'confirmemail']);
Route::post('/login-success',[AccountController::class,'checklogin']);

// Giỏ hàng
Route::get('cart-delete/{id}',[GiohangController::class,'delete']);
Route::any('/cart',[GiohangController::class,'cartstore']);

