<?php

namespace App\Http\Controllers;

use App\Models\Purgadores;
use Illuminate\Http\Request;

class PurgadoresController extends Controller
{
    
    // Mostrar todos los purgadores
    public function index(Request $request)
    {
        $search = request('search');
        $purgadores = Purgadores::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        // dd($purgadores);    
        return view('admin.purgadores.index', compact('purgadores', 'search'));
    }

    // Mostrar el formulario para crear un nuevo purgador (si usás vistas)
    public function create()
    {
        return view('admin.purgadores.create');
    }

    // Guardar un nuevo purgador
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|max:255',
        ]);

        $purgador = Purgadores::create($validated);

        return redirect()->route('purgadores')->with('success', 'Purgador creado con éxito');
    }

    // Mostrar un purgador en específico
    public function show($id)
    {
        $purgador = Purgadores::findOrFail($id);
        if (!$purgador) {
            return redirect()->route('purgadores')->with('error', 'Purgador no encontrado');
        }
        return response()->json($purgador);
    }

    // Mostrar el formulario para editar un purgador (si usás vistas)
    public function edit($id)
    {
        $purgador = Purgadores::findOrFail($id);
        if (!$purgador) {
            return redirect()->route('purgadores')->with('error', 'Purgador no encontrado');
        }
        return view('admin.purgadores.edit', compact('purgador'));
    }
}
