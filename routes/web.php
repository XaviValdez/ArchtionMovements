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
    return view('index');
})->name('landing');

Route::get('acercaDe', function() {
    return view('acerca_de');
})->name('acercaDe');

Route::get('contacto', function() {
    return view('contacto');
})->name('contacto');

Route::get('enviarMaterial', function() {
    return view('enviar_material');
})->name('enviarMaterial');

Route::get('proyectos', function() {
    return view('proyectos');
})->name('proyectos');

Route::get('publicacion', function() {
    return view('publicacion');
})->name('publicacion');

Route::get('registro', function() {
    return view('welcome');
})->name('registro');

Route::get('enviarProyecto', function() {
    return view('enviar_proyecto');
})->name('enviarProyecto');

Route::get('publicacion/{id}', function() {
    return view('publicacion');
})->name('publicacion');

Route::get('investigacion', function() {
    return view('investigacion');
})->name('investigacion');

Route::get('eventos', function() {
    return view('eventos');
})->name('eventos');

Route::get('evento_individual', function() {
    return view('evento_individual');
})->name('evento_individual');

Route::get('registro', function() {
    return view('registro');
})->name('registro');