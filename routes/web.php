<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\ResourceController;
use Symfony\Component\CssSelector\Node\FunctionNode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [layoutController::class, 'index'])->middleware('auth');
Route::get('/admin/dashboard', [layoutController::class, 'adminDash']);

// resource (crud)
Route::resource('laporan_kegiatan', ResourceController::class);


// auth
// --------
Route::get('/login', [sessionController::class, 'login'])->middleware('guest');
Route::post('/login', [sessionController::class, 'actionlogin']);

Route::get('/register', [sessionController::class, 'register'])->middleware('guest');
Route::post('/register', [sessionController::class, 'actionregister']);

Route::get('/logout', [sessionController::class, 'actionlogout']);
// --------
