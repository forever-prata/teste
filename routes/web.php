<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

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

Route::get('/teste',[TesteController::class,'funcaoTeste']);
Route::get('/cliente',[TesteController::class,'fCliente']);
Route::get('/tabela',[TesteController::class,'tabelaPessoas']);
Route::post('/teste/save',[TesteController::class,'store']);
Route::get('/teste/{id}',[TesteController::class,'show']);
Route::delete('/teste/{id}',[TesteController::class, 'destroy']);
Route::get('/teste/edit/{id}',[TesteController::class,'edit']);
Route::post('/teste/update/{id}',[TesteController::class,'update']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
