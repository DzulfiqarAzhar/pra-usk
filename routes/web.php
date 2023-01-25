<?php

use App\Models\Buku;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\User;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PeminjamanController;
use App\Http\Controllers\User\PengembalianController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard')->middleware('auth');
    Route::post('/dashboard/form', [DashboardController::class, 'create'])->name('dashboard.pinjam')->middleware('auth');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('user.peminjaman')->middleware('auth');
    Route::get('/peminjaman/form', [PeminjamanController::class, 'create'])->name('user.pinjam')->middleware('auth');
    Route::post('/peminjaman/form', [PeminjamanController::class, 'store'])->name('pinjam.buku')->middleware('auth');
    Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('user.pengembalian')->middleware('auth');
    Route::get('/pengembalian/form', [PengembalianController::class, 'create'])->name('user.kembalikan')->middleware('auth');
    Route::post('/pengembalian/form', [PengembalianController::class, 'store'])->name('kembalikan.buku')->middleware('auth');

    Route::post('form_peminjaman' ,function(Request $request){
        $buku_id = $request->buku_id;
        $bukus = Buku::all();
        return view('user.form_peminjaman' , compact("bukus", "buku_id"));
    });

    Route::get('/pesan', function () {
        return view('user.pesan');
    })->name('user.pesan');

    Route::get('/profil', function () {
        return view('user.profil');
    })->name('user.profil');

    Route::put('profile', function(Request $request){
        $user = User::find(Auth::user()->id)->update($request->all());
        $user2 = User::find(Auth::user()->id)->update([
            "password" => Hash::make($request->password)
        ]);

        if($user && $user2) {
            return redirect()->back()->with("status", "success")->with('message',
            'Berhasil mengubah profile');
        }
            return redirect()->back()->with("status", "danger")->with('message', 'Gagal mengubah profile');
    })->name('user.profil.update');
});