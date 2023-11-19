<?php

namespace App\Http\Controllers;

use App\Alumnos;
use App\Cursos;
use App\Profesores;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataAlum = Alumnos::all();
        $dataProf = Profesores::all();
        $dataCur = Cursos::all();
        return view('index',compact('dataAlum','dataProf', 'dataCur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registroAlumno');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumnos = new Alumnos();

        $alumnos->nombre = $request->post('nombre');
        $alumnos->paterno = $request->post('paterno');
        $alumnos->materno = $request->post('materno');
        $alumnos->email = $request->post('email');
        $alumnos->password = $request->post('password');
        $alumnos->fecha_nacimiento = $request->post('fecha_nacimiento');
        $alumnos->save();

        return redirect()->route('index.alumno');

    }

    /**
     * Display the specified resource.
     */
    public function show(Alumnos $alumnos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumnos $alumnos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnos $alumnos)
    {
        //
    }
}
