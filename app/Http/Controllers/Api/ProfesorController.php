<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        return response()->json(Profesor::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'           => 'required|string|max:255',
            'apellidos'        => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'dni'              => 'required|string|max:8',
            'email'            => 'required|email|max:255',
            'especialidad'     => 'required|string|max:255',
            'direccion'        => 'nullable|string|max:255',
            'telefono'         => 'nullable|string|max:9',
        ]);

        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function show(Profesor $profesor)
    {
        return response()->json($profesor);
    }

    public function update(Request $request, Profesor $profesor)
    {
        $profesor->update($request->all());
        return response()->json($profesor);
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return response()->json(null, 204);
    }
}