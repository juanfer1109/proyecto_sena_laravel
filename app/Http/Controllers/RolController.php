<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{

    public function index()
    {
        $rols = Rol::all();
        return view('rols.index', compact('rols'));
    }

    public function create()
    {
        return view('rols.create');
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->nombre_rol = $request->input('rolUsuario');

        $rol->save();

        return to_route('rols.index');
    }

    public function show(Rol $rol)
    {
        return view('rols.show')->with('rol', $rol);
    }

    public function edit(Rol $rol)
    {
        return view('rols.edit')->with('rol', $rol);
    }

public function update(Request $request, Rol $rol)
    {
        $rol->update([
            'nombre_rol' => $request->rolUsuario,
        ]);

        return to_route('rols.show', $rol);
    }

   public function destroy(Rol $rol)
    {
        $rol->delete();

        return to_route('rols.index');
    }
}
