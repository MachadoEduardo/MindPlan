<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Middleware\CheckIfIsAdmin;

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {
        Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy')->middleware(CheckIfIsAdmin::class);
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users',[UserController::class, 'index'])->name('users.index');
        Route::delete('/patients/{user}/destroy', [PatientController::class, 'destroy'])->name('patients.destroy')->middleware(CheckIfIsAdmin::class);
        Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
        Route::get('/patients/{user}', [PatientController::class, 'show'])->name('patients.show');
        Route::put('/patients/{user}', [PatientController::class, 'update'])->name('patients.update');
        Route::get('/patients/{user}/edit', [PatientController::class, 'edit'])->name('patients.edit');
        Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
        Route::get('/patients',[PatientController::class, 'index'])->name('patients.index');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rota de emergência pq o dev animal esquece a senha de admin xD
Route::get('/reset-admin', function () {
    $user = User::where('email', 'test@example.com')->first();
    $user->password = bcrypt('senha_resetada');
    $user->save();
    return "Senha resetada para 'senha_resetada'";
});

require __DIR__.'/auth.php';
