<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\ActividadeController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\SocialLoginController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


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
//
use App\Http\Controllers\UsuarioController;  // hace la llamada al controlador

use App\Http\Controllers\ProveedorController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





Route::resource('materia', MateriaController::class);

Route::resource('profesor', ProfesorController::class); //

Route::resource('estudiante', EstudianteController::class); // redirecciona

Route::resource('tema', TemaController::class);

Route::resource('actividades', ActividadeController::class);

Route::resource('evaluaciones', EvaluacionController::class);

Route::resource('pregunta', PreguntaController::class);

Route::get('contactanos', function () {


    $correo = new ContactanosMailable;

    Mail::to('rembertogonzales77@gmail.com')->send($correo);
    return "Mensaje enviado ";
});

Route::get('waping/send', 'WapingController@send');
Route::get('login/google', [SocialLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);
