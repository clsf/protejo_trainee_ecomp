<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembroController;
use App\Http\Controllers\EcompUsuarioController;
use App\Models\EcompUsuario;

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

Route::get('/inicial', function () {
    return view('inicial');
});

Route:: get('/',[EcompUsuarioController::class,'login']);
Route:: post('/logando',[EcompUsuarioController::class,'logar']);

Route::get('/listarMembros',[MembroController::class,"listarMembros"]);


Route:: get('/cadastrarUsuario',[EcompUsuarioController::class,"cadastrarUsuario"]);
Route:: post('/usuario',[EcompUsuarioController::class,"adicionar"]);

Route:: get('/buscarMembro',[MembroController::class,"buscarMembro"]);
Route:: post('/buscarMembro',[MembroController::class,"busca"]);

Route:: get('/cadastrarMembro',[MembroController::class,"cadastrarMembro"]);
Route:: post('/membro',[MembroController::class,"adicionarCadastro"]);
