<?php

use Carbon\Carbon;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;
use App\Models\Noticia;
use App\Models\Role;
use App\Models\User;

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

Route::view('/','inicio')->name('inicio');


Route::view('/historia','historia')->name('historia');
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');






/**Limitante para que solo los usuarios con
 * sesión iniciada puedan interactuar con estas pestañas y funciones */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::view('/documentacion','documentacion')->name('documentacion');
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('users.index');
    Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticia.show');


});

/**Limitante para que solo los usuarios con
 * rol de administrador puedan realizar estas funciones */
Route::middleware('auth', 'role:2')->group(function () {

    Route::get('/nueva-noticia', [NoticiaController::class, 'create'])->name('noticia.create');
    Route::post('/nueva-noticia', [NoticiaController::class, 'store'])->name('noticia.store');
    Route::get('/noticias/{noticia}/editar', [NoticiaController::class, 'edit'])->name('noticia.edit');
    Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticia.update');
    Route::delete('/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticia.destroy');
});

require __DIR__.'/auth.php';


