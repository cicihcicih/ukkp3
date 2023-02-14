<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;

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

//register

Route::get('register', [RegisterController::class,'view'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->name('register.store')->middleware('guest');

//login
Route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::group(['middleware'=> ['auth']], function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');
});

Route::view('error/403', 'error.403')->name('error.403');

//dasboard
Route::get('/dasboard/admin', [DasboardController::class, 'admin'])->name('dasboard.admin')->middleware('auth', 'role:admin,kasir');
Route::get('/dasboard/kasir', [DasboardController::class, 'kasir'])->name('dasboard.kasir')->middleware('auth', 'role:kasir');
Route::get('/dasboard/owner', [DasboardController::class, 'owner'])->name('dasboard.owner')->middleware('auth', 'role:owner');


Route::resource('outlet', OutletController::class);
Route::resource('paket', PaketController::class);
Route::resource('member', MemberController::class); 
Route::resource('transaksi', TransaksiController::class); 
