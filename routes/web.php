<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// pub
// === Akses Publik ===
Route::get('/', fn () => view('home', ['title' => 'Home']))->name('home');
// Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index-blood');
// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index-blood');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
    ]);
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//user -> login
Route::middleware(['auth', 'role:user'])->group(function () {
    // Route::get('/komentar', [KomentarController::class, 'index'])->name('komentar.index');
    // Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');
});
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/komentar', function () {
//         return view('komentar.index');
//     })->name('komentar.index');
// });

// Akses admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::get('/artikel/manage', [ArtikelManageController::class, 'index'])->name('artikel.manage');
    // Route::post('/artikel/manage', [ArtikelManageController::class, 'store'])->name('artikel.store');
});

// Akses superadmin
// === Akses SUPERADMIN ===
Route::middleware(['auth', 'role:superadmin'])->group(function () {
    Route::get('/dashboard/superadmin', fn () => view('dashboard.superadmin'))->name('dashboard.superadmin');
    // Route::get('/users/manage', [UserManageController::class, 'index'])->name('users.manage-blood');
    // Route::post('/users/manage', [UserManageController::class, 'store'])->name('users.store-blood');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
