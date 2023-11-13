<?php

use App\Http\Controllers\Registro;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });

Route::get('/',[Registro::class, 'index'])->name('registro.index');
Route::get('/agregar',[Registro::class, 'create']);
Route::get('/store',[Registro::class, 'store'])->name('registro.store');

Route::get('/clase-alumno', function () {
    return view('claseAlumno');
});
Route::get('/clase-profesor', function () {
    return view('claseProfesor');
});
