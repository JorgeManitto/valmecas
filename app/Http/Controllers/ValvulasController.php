<?php

namespace App\Http\Controllers;

use App\Models\EmpresasValvula;
use App\Models\MarcaValvula;
use App\Models\Valvula;
use Illuminate\Http\Request;

class ValvulasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $empresa_select = $request->input('empresa_select');
        $modelo_select = $request->input('modelo_select');

        $finalizada = $request->input('finalizada');
        
        $search = $request->input('search');
        $valvulas = Valvula::query()
        ->when($search, function ($query) use ($search) {
            $query->where('tag_item', 'like', '%' . $search . '%');
        })
        ->when($empresa_select, function ($query) use ($empresa_select) {
            $query->where('cliente', 'like', '%' . $empresa_select . '%');
        })
        ->when($modelo_select, function ($query) use ($modelo_select) {
            $query->whereRaw('LOWER(modelo) LIKE LOWER(?)', ['%' . $modelo_select . '%']);
        })
        ->when($finalizada, function ($query) use ($finalizada) {
            $query->where('finaliz', 'like', '%' . $finalizada . '%');
        })
        ->orderBy('id', 'desc')        
        ->paginate(25);


        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        
        return view('admin.valvulas.index', compact('valvulas', 'search', 'empresas','empresa_select','modelo_select','modelos', 'finalizada'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $method = 'valvulas.store';
        $valvula = new Valvula();
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        return view('admin.valvulas.show', compact('valvula','method','empresas','modelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $valvula = Valvula::create($request->all());
        return redirect()->route('valvulas')->with('success', 'Esta función aun no esta implementada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id = '')
    {
        $method = 'valvulas.show';
        $valvula = Valvula::findOrFail($id);
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        // dd($valvula);
        return view('admin.valvulas.show', compact('valvula','empresas','modelos','method'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = '')
    {
        $method = 'valvulas.update';
        $valvula = Valvula::findOrFail($id);
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        return view('admin.valvulas.show', compact('valvula','method','empresas','modelos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return redirect()->route('valvulas')->with('success', 'Esta función aun no esta implementada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
