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





use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;


Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'register']);

Route::get('/user', [ProfileController::class, 'show'])->name('user');

//déconnexion
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

//connexion
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/IUT', [MapController::class, 'IUT'])->name('IUT');

Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('questionnaire');

Route::get('/carte', [MapController::class, 'map'])->name('map');



Route::get('/MMI', [MapController::class, 'MMI'])->name('MMI');
Route::get('/GACO', [MapController::class, 'GACO'])->name('GACO');
Route::get('/SGM', [MapController::class, 'SGM'])->name('SGM');
Route::get('/PEC', [MapController::class, 'PEC'])->name('PEC');
Route::get('/GCCD', [MapController::class, 'GCCD'])->name('GCCD');

//user visite room
Route::post('/visiter-piece/{salleId}', 'MapController@store')->name('visite-room.store');

Route::post('/visiter-destination/{destinationId}', [MapController::class, 'storeVisit'])->name('visiter-destination.store');


//questionnaire
Route::get('/questionnaire', [QuestionnaireController::class, 'index'])->name('questionnaire');
Route::post('/questionnaire/repondre', [QuestionnaireController::class, 'repondre'])->name('questionnaire.repondre');

//PDF
Route::get('/download/pdf', [ProfileController::class, 'downloadPDF'])->name('download.pdf');


require __DIR__.'/auth.php';
