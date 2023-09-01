<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\layoutController;
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
Route::get('/menu', [layoutController::class, 'menu']);


// auth
// --------
Route::get('/login', [sessionController::class, 'login']);
Route::post('/login', [sessionController::class, 'processLogin']);

Route::get('/register', [sessionController::class, 'register']);
Route::post('/register', [sessionController::class, 'validateRegister']);

Route::get('/logout', [sessionController::class, 'logout']);
// --------
