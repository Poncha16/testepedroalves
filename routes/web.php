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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function(Illuminate\Http\Request $request) {
    
    
    $produto = new App\Models\Produtos();
    $produto -> codigo = $request->get("codigo");
    $produto -> nome = $request->get("nome");
    $produto -> cat = $request->get("cat");
    $produto -> preco = $request->get("preco");
    $produto -> des = $request->get("des");

    $produto -> save();

    echo "Sua mensagem foi armazenada com sucesso! Código: " . $produto->id;
});

Route::get('/lista', function () {
    return view('lista', array("produtos" => App\Models\Produtos::all()));
});