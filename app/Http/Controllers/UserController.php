<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mostrar todos los usuarios
    public function index(Request $request)
    {
        $search = request('search');
        $usuarios = User::query()
        ->when($search, function ($query) use ($search) {
            $query->where('email', 'like', '%' . $search . '%');
        })
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('admin.users.index', compact('usuarios', 'search'));
    }

    // Mostrar el formulario para crear un nuevo usuario (si usás vistas)
    public function create()
    {
        return view('admin.users.create');
    }

    // Guardar un nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        return redirect()->route('usuarios')->with('success', 'Usuario creado con éxito');
    }

    // Mostrar un usuario en específico
    public function show(User $user)
    {
        return response()->json($user);
    }

    // Mostrar el formulario para editar un usuario (si usás vistas)
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if (!$user) {
            return redirect()->route('usuarios')->with('error', 'Usuario no encontrado');
        }
        return view('admin.users.edit', compact('user'));
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'username' => 'string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $user->id, // Ignora el usuario actual
            'password' => 'nullable|string|min:6',
        ]);
    
        if (!empty($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']);
        }
    
        $user->update($validated);
    
        return redirect()->route('usuarios')->with('success', 'Usuario actualizado con éxito');
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!$user) {
            return redirect()->route('usuarios')->with('error', 'Usuario no encontrado');
        }
        $user->delete();

        return redirect()->route('usuarios')->with('success', 'Usuario eliminado con éxito');
    }
}
