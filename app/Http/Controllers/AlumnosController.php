<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{

    public function index()
    {
        //
        return view('inicio');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Alumnos $alumnos)
    {
        //
    }

    public function edit(Alumnos $alumnos)
    {
        //
    }


    public function update(Request $request, Alumnos $alumnos)
    {
        //
    }


    public function destroy(Alumnos $alumnos)
    {
        //
    }
}
