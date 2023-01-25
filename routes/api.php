<?php

use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\PeminjamanController;
use App\Http\Controllers\API\BukuController;
use App\Http\Controllers\API\PenerbitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kategori', [API\KategoriController::class, 'get']);
Route::get('kategori/{id}', [API\KategoriController::class, 'get']);
Route::post('kategori', [API\KategoriController::class, 'store']);
Route::put('kategori/{id}', [API\KategoriController::class, 'update']);
Route::delete('kategori/{id}', [API\KategoriController::class, 'destroy']);

Route::get('user', [API\UserController::class, 'get']);
Route::get('user/{id}', [API\UserController::class, 'get']);
Route::post('user', [API\UserController::class, 'store']);
Route::put('user/{id}', [API\UserController::class, 'update']);
Route::delete('user/{id}', [API\UserController::class, 'destroy']);

Route::get('buku', [API\BukuController::class, 'get']);
Route::get('buku/{id}', [API\BukuController::class, 'get']);
Route::post('buku', [API\BukuController::class, 'store']);
Route::put('buku/{id}', [API\BukuController::class, 'update']);
Route::delete('buku/{id}', [API\BukuController::class, 'destroy']);

Route::get('peminjaman', [API\PeminjamanController::class, 'get']);
Route::get('peminjaman/{id}', [API\PeminjamanController::class, 'get']);
Route::post('peminjaman/store', [API\PeminjamanController::class, 'store']);
Route::put('peminjaman/{id}', [API\PeminjamanController::class, 'update']);
Route::delete('peminjaman/{id}', [API\PeminjamanController::class, 'destroy']);

Route::get('penerbit', [API\PenerbitController::class, 'get']);
Route::get('penerbit/{id}', [API\PenerbitController::class, 'get']);
Route::post('penerbit', [API\PenerbitController::class, 'store']);
Route::put('penerbit/{id}', [API\PenerbitController::class, 'update']);
Route::delete('penerbit/{id}', [API\PenerbitController::class, 'destroy']);

