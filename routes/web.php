<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/list', function () {
    return view('list');
});

Route::get('/medididas-de-tendencia-central/media', function () {
    $promedio = 0;
    $mediana=0;
    $operacion = 1;
    $moda = 0;
    $muestra = 0;
    return view('MedidasTendencia')->with('mediana', $mediana)->with('promedio', $promedio)
    ->with('operacion', $operacion)->with('moda',$moda)
    ->with('muestra', $muestra);
});
Route::get('/medididas-de-tendencia-central/mediana', function () {
    $mediana = 0;
    $operacion = 2;
    $promedio =0;
    $moda=0;
    $muestra = 0;
    return view('MedidasTendencia')->with('mediana', $mediana)->with('promedio', $promedio)
    ->with('operacion', $operacion)->with('moda',$moda)
    ->with('muestra', $muestra);
});

Route::get('/medididas-de-tendencia-central/moda', function () {
    $mediana = 0;
    $operacion = 3;
    $promedio =0;
    $moda=0;
    $muestra = 0;
    return view('MedidasTendencia')->with('mediana', $mediana)->with('promedio', $promedio)
    ->with('operacion', $operacion)->with('moda',$moda)
    ->with('muestra', $muestra);
});


Route::get('/medididas-de-tendencia-central/muestra', function () {
    $mediana = 0;
    $operacion = 4;
    $promedio =0;
    $moda=0;
    $muestra = 0;
    return view('MedidasTendencia')->with('mediana', $mediana)->with('promedio', $promedio)
    ->with('operacion', $operacion)->with('moda',$moda)
    ->with('muestra', $muestra);
});




Route::post('/medididas-de-tendencia-central/media/resultado', [App\Http\Controllers\FuncionesController::class, 'media'])->name('media');
Route::post('/medididas-de-tendencia-central/mediana/resultado', [App\Http\Controllers\FuncionesController::class, 'mediana'])->name('mediana');
Route::post('/medididas-de-tendencia-central/moda/resultado', [App\Http\Controllers\FuncionesController::class, 'moda'])->name('moda');
Route::post('/medididas-de-tendencia-central/muestra/resultado', [App\Http\Controllers\FuncionesController::class, 'muestra'])->name('muestra');

Route::get('/tablas-de-distribucion-de-frecuencias/datos/agrupados', function(){
    $media = 0;
    $mediana = 0;
    $moda = 0;
    return view('TablasFrecuencias')->with('media',$media)->with('mediana',$mediana)->with('moda',$moda);
});

Route::get('/tablas-de-distribucion-de-frecuencias/datos/no-agrupados', function(){
    return view('TablasFrecuencias');
});

Route::post('/tablas-de-distribucion-de-frecuencias/datos/agrupados/resultado', [App\Http\Controllers\FuncionesController::class, 'tablafrecuencia'])->name('tablas');