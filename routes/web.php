<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
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



Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobrenos');
Route::get('/contacto','ContactoController@contacto');

Route::get('/contacto/{nome}/{categoria?}/', function (string $nome,string $categoria = 'categoria não informada' ) {
    echo "Estamos aqui: $nome - $categoria";
}
);

//nome

/*
Route::get('/', function () {
    return view('welcome');
});

*/