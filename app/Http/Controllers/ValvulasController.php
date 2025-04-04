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
        ->orderBy('id', 'desc')        
        ->paginate(25);


        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        
        return view('admin.valvulas.index', compact('valvulas', 'search', 'empresas','empresa_select','modelo_select','modelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.valvulas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = [
            'storage_id'        => $request->input('storage_id'),
            'user_id'           => $request->input('user_id'),
            'created'           => $request->input('created'),
            'created_by'        => $request->input('created_by'),
            'modified_user_id'  => $request->input('modified_user_id'),
            'modified'          => $request->input('modified'),
            'modified_by'       => $request->input('modified_by'),
            'tag'               => $request->input('tag'),
            'oferta'            => $request->input('oferta'),
            'cliente'           => $request->input('cliente'),
            'ident'             => $request->input('ident'),
            'finaliz'           => $request->input('finaliz'),
            'wo'                => $request->input('wo'),
            'recepciona'        => $request->input('recepciona'),
            'fentra'            => $request->input('fentra'),
            'fsalida'           => $request->input('fsalida'),
            'sector'            => $request->input('sector'),
            'tag_item'          => $request->input('tag_item'),
            'modelo'            => $request->input('modelo'),
            'tipo'              => $request->input('tipo'),
            'diametro'          => $request->input('diametro'),
            'accionamiento'     => $request->input('accionamiento'),
            'rating'            => $request->input('rating'),
            'materialasiento'   => $request->input('materialasiento'),
            'tipounion'         => $request->input('tipounion'),
            'materialcierre'    => $request->input('materialcierre'),
            'tipocierre'        => $request->input('tipocierre'),
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $valvula = Valvula::findOrFail($id);
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        // dd($valvula);
        return view('admin.valvulas.show', compact('valvula','empresas','modelos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
