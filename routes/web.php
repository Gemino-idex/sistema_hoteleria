<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
    })->name('inicio')->middleware('auth');
    
    Route::middleware('auth')->group(function () {
Route::get('/habitaciones', function () {
    return view('/habitaciones.index');
})->name('habitaciones');

route::get('/servicios', function () {
    return view('/servicios.index');
})->name('servicios');

route::get('/huespedes', function () {
    return view('/huespedes.index');
})->name('huespedes');

route::get('/pagos-facturas', function () {
    return view('/facturas.index');
})->name('pagos-facturas');

route::get('/huespedes/cuentas', function () {
    return view('/huespedes.cuentas');
})->name('huespedes.cuentas');
});