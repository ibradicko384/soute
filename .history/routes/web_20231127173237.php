<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FoyerController;
use App\Http\Controllers\AidemenageController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {return view('index');});
// Dashboard
Route::get('/backoffice/dashboard', function () {
    return view('backoffice.dashboard');
})->name('dashboard');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');


    Route::middleware(['auth', 'verified'])->group(function () {
    // Routes d'authentification
    Route::get('/backoffice/register', [RegisteredUserController::class, 'create']);
    Route::post('/backoffice/register', [RegisteredUserController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/backoffice/dashboard', function () {
        return view('backoffice.dashboard');
    })->name('backoffice.dashboard');
});
    // Aidemenage
    Route::get('/backoffice/aidemenage/create', [AidemenageController::class, 'create'])->name('aidemenage.create');
    Route::get('/backoffice/aidemenage/lister', [AidemenageController::class, 'lister'])->name('list_aidemenage');
    Route::post('/backoffice/aidemenage/store', [AidemenageController::class, 'store'])->name('aidemenage.store');
    Route::get('/liste_menagere', [AidemenageController::class, 'ListeMenagere'])->name('liste_menagere');

    // Foyer
    Route::post('/backoffice/foyer/store', [FoyerController::class, 'store'])->name('foyer.store');
    Route::get('/backoffice/liste_foyer', [FoyerController::class, 'lister'])->name('liste_foyers');
    Route::get('/backoffice/foyer/create', [FoyerController::class, 'create'])->name('foyers.create');
    Route::get('/backoffice/foyer', [FoyerController::class, 'foyer'])->name('foyer.show');

    // User
    Route::get('/backoffice/user', [RegisteredUserController::class, 'lister'])->name('user');
    Route::get('/backoffice/user/{id}/edit', [RegisteredUserController::class, 'edit'])->name('editUser');


    Route::get('/backoffice/user/{id}', [RegisteredUserController::class, 'show'])->name('showUser');
    Route::delete('/backoffice/user/{id}', [RegisteredUserController::class, 'destroy'])->name('deleteUser');

    // Profile
    Route::get('/backoffice/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/backoffice/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/backoffice/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes Supplémentaires
    Route::get('/menagere', [AidemenageController::class, 'AidePublicAidesMenageres'])->name('menagere');
    // routes/web.php

    Route::get('/commentaires/commentaire', [CommentaireController::class, 'store'])
     ->name('commentaire');

   // web.php
Route::get('/verification/notice', [VerificationController::class, 'notice'])
->name('verification.notice');


Route::get('/email/verify', function () {
    // ...
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function () {
    // ...
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function () {
    // ...
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

