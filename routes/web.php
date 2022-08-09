<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
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



Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contacto','ContactoController@contacto')->name('site.login');

Route::prefix('/app')->group( function(){

    Route::get('/clientes', function(){return 'clientres';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos',function(){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}/','TesteController@teste')->name('site.contacto');

Route::fallback(function(){
    echo 'A rota acessada não existe. Clique a qui para ir para página incial';
});

//Route::redirect('/rota2','/rota1');

/*
Route::get(
    '/contacto/{nome}/{categoria_id}/',
    function (
    string $nome = 'Desconhecido',
    int $categoria = 1 
    ) {
    echo "Estamos aqui: $nome - $categoria";    
    }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
*/
//nome

/*
Route::get('/', function () {
    return view('welcome');
});

*/