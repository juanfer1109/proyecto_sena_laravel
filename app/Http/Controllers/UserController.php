<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $rols = Rol::all();
        return view('users.create')->with('rols', $rols);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('nombreUsuario');
        $user->email = $request->input('emailUsuario');
        $user->password = $request->input('passwordUsuario');
        $user->rol_id = $request->input('rolUsuario');

        $user->save();

        return to_route('users.index');
    }

    public function show(User $user)
    {
        $rols = Rol::all();
        $rol = $rols->find($user->rol_id);
        return view('users.show', compact('user'))->with('rol', $rol);
    }

    public function edit(User $user)
    {
        $rols = Rol::all();
        return view('users.edit')->with('user', $user)->with('rols', $rols);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->nombreUsuario,
            'email' => $request->emailUsuario,
            'password' => $request->passwordUsuario,
            'rol_id' => $request->rolUsuario,
        ]);

        return to_route('users.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return to_route('users.index');
    }
}
