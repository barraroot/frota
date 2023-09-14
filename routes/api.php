<?php

use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('modelos/{marca}', function(Marca $marca){
    return $marca->modelos;
});

Route::post('marca', function(Request $request){
    $marca = new Marca;
    $marca->nome = $request->input('nome');
    $marca->save();
    return Marca::all();
});

Route::post('modelo/{marca}', function(Request $request, Marca $marca){
    $modelo = new Modelo;
    $modelo->marca_id = $marca->id;
    $modelo->nome = $request->input('nome');
    $modelo->save();
    return $marca->modelo;
});