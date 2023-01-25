<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'postLogin']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'postRegister']);

// Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/strukturOrganisasi', [HomeController::class, 'strukturOrganisasi']);
Route::get('/daftarKejuruan', [HomeController::class, 'daftarKejuruan']);
Route::get('/pengumuman', [HomeController::class, 'pengumuman']);
Route::get('/sk', [HomeController::class, 'syaratDanKetentuan']);
Route::get('/kebijakanPrivasi', [HomeController::class, 'kebijakanPrivasi']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/alumni', [HomeController::class, 'alumni']);

Route::get('*', [AuthController::class, 'NotFound']);
