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
use App\Http\Controllers\DetailTransaksiController;


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
    return view('home');
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
Route::get('/dasboard/admin', [DasboardController::class, 'admin'])->name('dasboard.admin')->middleware('auth', 'role:admin');
Route::get('/dasboard/kasir', [DasboardController::class, 'kasir'])->name('dasboard.kasir')->middleware('auth', 'role:kasir');
Route::get('/dasboard/owner', [DasboardController::class, 'owner'])->name('dasboard.owner')->middleware('auth', 'role:owner');


Route::resource('outlet', OutletController::class)->middleware('auth', 'role:outlet');
Route::resource('paket', PaketController::class)->middleware('auth', 'role:paket');
Route::resource('member', MemberController::class)->middleware('auth', 'role:member');
// Route::resource('transaksi', TransaksiController::class)->middleware('auth', 'role:transaksi');

Route::middleware(['auth', 'role:kasir'])->group(function(){
    Route::post('transaksi/baru', [TransaksiController::class, 'create'])->name('transaksi.baru');
    Route::get('transaksi/{transaksi}', [TransaksiController::class, 'edit'])->name('transaksi.proses');
    Route::post('transaksi/simpan', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::post('transaksi/{id}/detail', [DetailTransaksiController::class, 'store'])->name('transaksi.detail.store');
    // Route::post('transaksi/', [TransaksiController::class, 'index'])->name('transaksi.index');
});