<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Middleware\CheckIfIsAdmin;

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');

/*Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', CheckIfIsAdmin::class])->name('dashboard');*/

Route::middleware(['auth', 'verified', CheckIfIsAdmin::class])
    ->prefix('admin')
    ->group(function () {
        Route::resource('users', UserController::class)->except(['destroy']);
        Route::delete('users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

        Route::resource('patients', PatientController::class)->except(['destroy', 'index']);
        Route::delete('patients/{user}/destroy', [PatientController::class, 'destroy'])->name('patients.destroy');
        Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
    });

/* Route::get('/reset-admin', function () {
    $user = User::where('email', 'test@example.com')->first();
    $user->password = bcrypt('senha_resetada');
    $user->save();
    return "Senha resetada para 'senha_resetada'";
}); */

require __DIR__.'/auth.php';
