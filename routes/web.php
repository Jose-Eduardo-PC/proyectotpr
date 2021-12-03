<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('Usuario',UsuarioController::class);  //redireccionar al usuario 
Route::resource('proveedor',ProveedorController::class);  //redireccionar al usuario 