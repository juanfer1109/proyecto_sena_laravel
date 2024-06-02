<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipos.create');
    }

    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->tipo_equipo = $request->input('tipoEquipo');

        $tipo->save();

        return to_route('tipos.index');
    }

    public function show(Tipo $tipo)
    {
        return view('tipos.show')->with('tipo', $tipo);
    }

    public function edit(Tipo $tipo)
    {
        return view('tipos.edit')->with('tipo', $tipo);
    }

    public function update(Request $request, Tipo $tipo)
    {
        $tipo->update([
            'tipo_equipo' => $request->tipoEquipo,
        ]);

        return to_route('tipos.show', $tipo);
    }

    public function destroy(Tipo $tipo)
    {
        $tipo->delete();

        return to_route('tipos.index');
    }
}
