<?php

use App\Http\Controllers\TareaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Elimina la ruta duplicada de perfil
// Route::get('/perfil', function () {
//     return view('perfil');
// })->middleware(['auth', 'verified'])->name('perfil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/perfil', [TareaController::class, 'index'])->name('perfil');
    Route::get('/anadirTarea', [TareaController::class, 'create'])->name('anadirTarea');
    Route::post('/anadirTarea', [TareaController::class, 'store'])->name('anadirTarea');
    Route::get('/tarea/{tarea}', [TareaController::class, 'show'])->name('detalleTarea');
    Route::get('/tarea/{tarea}/editaTarea', [TareaController::class, 'edit'])->name('editarTarea');
    Route::patch('/tarea/{tarea}', [TareaController::class, 'update'])->name('actualizarTarea');
    Route::delete('/tarea/{tarea}', [TareaController::class, 'destroy'])->name('eliminarTarea');
});

require __DIR__.'/auth.php';
