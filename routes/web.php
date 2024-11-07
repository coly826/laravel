<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\Le_patientController;
use Illuminate\Support\Facades\Route;

// Route d'accueil

Route::get('/', function () {
    return view('accueil');
});


Route::get('/jours_travail', function () {
    return view('jours_travail');
});
// Routes d'inscription et de connexion
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route protégée par l'authentification
Route::get('/dashboard', function () {
    return view('dashboard'); // Assurez-vous que la vue 'dashboard' existe
})->name('dashboard')->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/ophtalmologue', [ConsultationController::class, 'createOphtalmologueForm'])->name('ophtalmologue');
Route::post('/ophtalmologue', [ConsultationController::class, 'storeOphtalmologue']);

// Routes for editing and deleting Ophtalmologue
Route::get('/ophtalmologue/{id}/edit', [ConsultationController::class, 'editOphtalmologue'])->name('ophtalmologue.edit');
Route::put('/ophtalmologue/{id}', [ConsultationController::class, 'updateOphtalmologue'])->name('ophtalmologue.update');
Route::delete('/ophtalmologue/{id}', [ConsultationController::class, 'destroyOphtalmologue'])->name('ophtalmologue.destroy');



// les patients
Route::get('/patient',[Le_patientController::class, 'formpatient'])->name('patient');
Route::post('/patient',[Le_patientController::class, 'storepatient']);
