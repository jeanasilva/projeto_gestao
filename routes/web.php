<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoControler@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {

    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index']);
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');

});

//ROTA TESTE

route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste']);

//REDIRECIONAMENTOS CALLBACK

// Route::get('/rota1', function(){
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function(){
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// // Route::redirect('/rota2', '/rota1', 301);

//REDIRECIONAMENTO FALLBACK - PAGE NÃO EXISTE

Route::fallback(function() {
    echo 'A rota acessada não existe, <a href="/" clique aqui </a> para ir para a pagina inicial';
});


