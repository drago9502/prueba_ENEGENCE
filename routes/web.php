<?php

use App\Http\Controllers\EstadosController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



route::get('/',[EstadosController::class,'index']);
route::get('/cargarEstados',[EstadosController::class,'cargarEstados']);
route::get('/mostrarEstados',[EstadosController::class,'mostrarEstados']);

route::get('/estado_minicipios/{idEstado}',[EstadosController::class,'estadoMunicipios']);