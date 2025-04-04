<?php

namespace App\Http\Controllers;

use App\Models\EmpresasValvula;
use Illuminate\Http\Request;

class EmpresasValvulasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $clientes = EmpresasValvula::query()
        ->when($search, function ($query) use ($search) {
            $query->where('nombre', 'like', '%' . $search . '%');
        })
        ->orderBy('id','desc')
        ->paginate(10);
        return view('admin.empresas.valvulas.index', compact('clientes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.empresas.valvulas.create');
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
        EmpresasValvula::create($params);

        $message = [
            'success' => 'Cliente creado con exito.',
        ];
        return redirect()->route('clientes.valvulas')->with($message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = EmpresasValvula::findOrFail($id);
        // dd($cliente);
        return view('admin.empresas.valvulas.edit', compact('cliente'));
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
        $cliente = EmpresasValvula::findOrFail($id);
        $cliente->update($params);

        $message = [
            'success' => 'Cliente actualizado con exito.',
        ];
        return redirect()->route('clientes.valvulas')->with($message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = EmpresasValvula::findOrFail($id);
        $cliente->delete(); // Eliminar el registro correctamente

        $message = [
            'success' => 'Cliente eliminado con exito.',
        ];
        return redirect()->route('clientes.valvulas')->with($message);
    }
    
}
