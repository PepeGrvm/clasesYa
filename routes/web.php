<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('inicio');
// });



Route::get('/clase-alumno', function () {
    return view('claseAlumno');
});
Route::get('/clase-profesor', function () {
    return view('claseProfesor');
});


//RUTAS ALUMNO
Route::get('/index',[AlumnosController::class, 'index'])->name('index.alumno');
Route::get('/registroAlumno',[AlumnosController::class, 'create'])->name('registro.alumno');
Route::post('/storeAlumno',[AlumnosController::class, 'store'])->name('store.alumno');


//RUTAS PROFE
Route::get('/registroProfe',[ProfesoresController::class, 'create'])->name('registro.profe');
Route::post('/storeProfe',[ProfesoresController::class, 'store'])->name('store.profesor');

//RUTAS CURSOS
Route::get('/registroCurso',[CursosController::class, 'create'])->name('registro.curso');
Route::post('/storeCurso',[CursosController::class, 'store'])->name('store.curso');


Route::get('/perfil/{usuario}', [ProfesoresController::class, 'mostrarPerfil'])->name('perfil.profe');


Route::get('/inicioProfe', function () {
    return view('inicioProfe');
});
Route::get('/inicioAlum', function () {
    return view('inicioAlum');
});

Route::get('/login', function () {
    return view('inicioSesion');
});
