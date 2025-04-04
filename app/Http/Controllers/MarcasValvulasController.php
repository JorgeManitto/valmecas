<?php

namespace App\Http\Controllers;

use App\Models\MarcaValvula;
use Illuminate\Http\Request;

class MarcasValvulasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $marcas = MarcaValvula::query()
        ->when($search, function ($query) use ($search) {
            $query->where('nombre', 'like', '%' . $search . '%');
        })
        ->orderBy('id','desc')
        ->paginate(10);
        return view('admin.marcas.valvulas.index', compact('marcas', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.marcas.valvulas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = [
            'nombre' => $request->nombre,
            'estado' => $request->estado
        ];
        MarcaValvula::create($params);

        $message = [
            'success' => 'Marca creada con exito.',
        ];
        return redirect()->route('marcas.valvulas')->with($message);
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
        $marca = MarcaValvula::findOrFail($id);
        // dd($cliente);
        return view('admin.marcas.valvulas.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $params = [
            'nombre' => $request->nombre,
            'estado' => $request->estado
        ];
        $marca = MarcaValvula::findOrFail($id);
        $marca->update($params);

        $message = [
            'success' => 'Marca actualizado con exito.',
        ];
        return redirect()->route('marcas.valvulas')->with($message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $marca = MarcaValvula::findOrFail($id);
        $marca->delete(); // Eliminar el registro correctamente

        $message = [
            'success' => 'Marca eliminada con exito.',
        ];
        return redirect()->route('marcas.valvulas')->with($message);
    }
}
