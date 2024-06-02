<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Tipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function create()
    {
        $tipos = Tipo::all();
        return view('equipos.create')->with('tipos', $tipos);
    }

    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->nombre = $request->input('nombreEquipo');
        $equipo->marca = $request->input('marcaEquipo');
        $equipo->modelo = $request->input('modeloEquipo');
        $equipo->ano_fabricacion = $request->input('anoFabricacionEquipo');
        $equipo->ano_compra = $request->input('anoCompraEquipo');
        $equipo->tipo_id = $request->input('tipoEquipo');

        $equipo->save();

        return to_route('equipos.index');
    }

    public function show(Equipo $equipo)
    {
        $tipos = Tipo::all();
        $tipo = $tipos->find($equipo->tipo_id);
        return view('equipos.show', compact('equipo'))->with('tipo', $tipo);
    }

    public function edit(Equipo $equipo)
    {
        $tipos = Tipo::all();
        return view('equipos.edit')->with('equipo', $equipo)->with('tipos', $tipos);
    }

    public function update(Request $request, Equipo $equipo)
    {
        $equipo->update([
            'nombre' => $request->nombreEquipo,
            'marca' => $request->marcaEquipo,
            'modelo' => $request->modeloEquipo,
            'ano_fabricacion' => $request->anoFabricacionEquipo,
            'ano_compra' => $request->anoCompraEquipo,
            'tipo_id' => $request->tipoEquipo,
        ]);

        return to_route('equipos.show', $equipo);
    }

    public function destroy(Equipo $equipo)
    {
        $equipo->delete();

        return to_route('equipos.index');
    }

}
