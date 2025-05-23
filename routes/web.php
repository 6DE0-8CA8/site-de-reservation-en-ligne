<?php

use App\Http\Controllers\Acceuilcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\site\Acceuilcontroller as SiteAcceuilcontroller;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


use App\Http\Controllers\Argencecontroller;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('argences', Argencecontroller::class);
});


Route::get('/', [Acceuilcontroller::class, 'index'])->name('acceuil');

