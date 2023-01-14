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

Route::get('/', [\App\Http\Controllers\CnpjController::class, 'index' ]);  // Carregamos essa controller com o metodo index que acabamos de fazer
Route::get('/cadastro-de-cnpj', [\App\Http\Controllers\CnpjController::class, 'create' ]); 
Route::post('/cadastro-de-cnpj', [\App\Http\Controllers\CnpjController::class, 'store' ]);  // enviando dados ao formulario
Route::get('/cnpj-cadastrado', [\App\Http\Controllers\CnpjController::class, 'show' ]);
Route::get('/consulta-cnpj', [\App\Http\Controllers\CnpjController::class, 'consulta' ]);  
Route::post('/buscar-cnpj', [\App\Http\Controllers\CnpjController::class, 'store' ]); 
Route::get('/listar-cnpj', [\App\Http\Controllers\CnpjController::class, 'list' ]); 


Route::get('/consulta-cep', [\App\Http\Controllers\CepController::class, 'create' ]); 
Route::post('/buscar-cliente', [\App\Http\Controllers\CepController::class, 'store' ]); 
Route::get('/versaophp', [\App\Http\Controllers\phpinfo::class, 'version' ]); 

Route::get('/cadastrar-cliente', [\App\Http\Controllers\UserController::class, 'create' ]); // retorna view para cadastrar o usuario
Route::post('/cadastrar-cliente', [\App\Http\Controllers\UserController::class, 'store' ]); // salva os dados
Route::get('/deletar-usuario/{id}', [\App\Http\Controllers\UserController::class, 'deleteUser' ]);
Route::get('/editar-usuario/{id}', [\App\Http\Controllers\UserController::class, 'show' ]); // Exibiçao de dados 
Route::post('/editar-usuario/{id}', [\App\Http\Controllers\UserController::class, 'update' ]); //Formulario de Edição 
Route::get('/clientes', [\App\Http\Controllers\UserController::class, 'index' ]);



