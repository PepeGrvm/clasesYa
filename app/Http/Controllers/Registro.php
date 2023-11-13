<?php

namespace App\Http\Controllers;



use App\Alumnos;
use App\Profesores;
use Illuminate\Http\Request;

class Registro extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Alumnos::all();
        return view('inicio', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alumno = new Alumnos();

        $alumno->nombre = $request->post('nombre');
        $alumno->paterno = $request->post('paterno');
        $alumno->materno = $request->post('materno');
        $alumno->email = $request->post('email');
        $alumno->password = $request->post('password');
        $alumno->fecha_nacimiento = $request->post('fecha_nacimiento');
        $alumno->save();

        return redirect()->route('registro.index')->with("success","agregado correctamente");


        // $profesor = new Profesores();

        // $profesor->nombre = $request->post('nombre');
        // $profesor->paterno = $request->post('paterno');
        // $profesor->materno = $request->post('materno');
        // $profesor->email = $request->post('email');
        // $profesor->password = $request->post('password');
        // $profesor->fecha_nacimiento = $request->post('fecha_nacimiento');
        // $profesor->titulo = $request->post('titulo');
        // $profesor->fecha_egreso = $request->post('fecha_egreso');
        // $profesor->especializacion = $request->post('especializacion');
        // $profesor->save();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
