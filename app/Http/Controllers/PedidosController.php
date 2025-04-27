<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoOperario;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search');
        $pedidos = Pedido::query()
        ->when($search, callback: function ($query) use ($search) {
            $query->where('numpedido', 'like', '%' . $search . '%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        // dd($pedidos);
        // Return the view with the orders data
        return view('admin.pedidos.index', compact('pedidos','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pedido = new Pedido();
        $method = 'pedidos.store';
        $url = route('pedidos.store');
        $title = 'Crear pedido';
        $operarios = PedidoOperario::all();
        return view('admin.pedidos.show', compact('pedido', 'method', 'url', 'title', 'operarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $this->returnParams($request);
        // dd($params);
        Pedido::create($params);
        return redirect()->route('pedidos')->with('success', 'Pedido creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedido = Pedido::find($id);
        $method = 'pedidos.update';
        $url = route('pedidos.update', $pedido->id);
        $title = 'Editar pedido';
        $operarios = PedidoOperario::pluck('name');
        // dd($pedido->trabajad_nuevo);
        return view('admin.pedidos.show', compact('pedido', 'method', 'url', 'title', 'operarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pedido = Pedido::find($request->id);
        $params = $this->returnParams($request);
        // dd($params);
        $pedido->update($params);
        return redirect()->route('pedidos')->with('success', 'Pedido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect()->route('pedidos')->with('success', 'Pedido eliminado correctamente');
    }
    public function agregarOperario(Request $request)
    {
        $operario = new PedidoOperario();
        $operario->name = $request->nombreOperario;
        $operario->save();
        return json_encode([
            'success' => true,
            'message' => 'Operario agregado correctamente',
        ]);
    }
    public function eliminarOperario(Request $request)
    {
        $operario = PedidoOperario::find($request->id);
        $operario->delete();
        return json_encode([
            'success' => true,
            'message' => 'Operario eliminado correctamente',
        ]);
    }
    public function returnParams($data)
    {
        $params = [
            'id' => $data->id,
            'storage_id' => '5',
            'user_id' => auth()->user()->id,
            'created' => now(),
            'created_by' => auth()->user()->name,
            'modified_user_id' => auth()->user()->id,
            'modified' => now(),
            'modified_by' => auth()->user()->name,
            'fecha' => $data->fecha,
            'numpedido' => $data->numpedido ?? '',
            'linea1' => $data->linea1 ?? '',
            'linea2' => $data->linea2 ?? '',
            'linea3' => $data->linea3 ?? '',
            'linea4' => $data->linea4 ?? '',
            'trabajador1' => $data->trabajador1 ?? '',
            'trabajador2' => $data->trabajador2 ?? '',
            'trabajador3' => $data->trabajador3 ?? '',
            'trabajador4' => $data->trabajador4 ?? '',
            'horas1' => $data->horas1 ?? '',
            'horas2' => $data->horas2 ?? '',
            'horas3' => $data->horas3 ?? '',
            'horas4' => $data->horas4 ?? '',
            'maquina1' => $data->maquina1 ?? '',
            'maquina2' => $data->maquina2 ?? '',
            'maquina3' => $data->maquina3 ?? '',
            'maquina4' => $data->maquina4 ?? '',
            'archivoadjunto' => $data->archivoadjunto ?? '',
            'adjuntaralbaran' => $data->adjuntaralbaran ?? '',
            'finalizado' => $data->finalizado ?? '',
            'observaciones' => $data->observaciones ?? '',
            'Zona' => $data->Zona ?? '',
            'linea1concepto' => $data->linea1concepto ?? '',
            'linea2concepto' => $data->linea2concepto ?? '',
            'linea3concepto' => $data->linea3concepto ?? '',
            'linea4concepto' => $data->linea4concepto ?? '',
            'ln2trabajador1' => $data->ln2trabajador1 ?? '',
            'ln2trabajador2' => $data->ln2trabajador2 ?? '',
            'ln2trabajador3' => $data->ln2trabajador3 ?? '',
            'ln2trabajador4' => $data->ln2trabajador4 ?? '',
            'ln3trabajador1' => $data->ln3trabajador1 ?? '',
            'ln3trabajador3' => $data->ln3trabajador3 ?? '',
            'ln3trabajador2' => $data->ln3trabajador2 ?? '',
            'ln3trabajador4' => $data->ln3trabajador4 ?? '',
            'ln4trabajador1' => $data->ln4trabajador1 ?? '',
            'ln4trabajador2' => $data->ln4trabajador2 ?? '',
            'ln4trabajador3' => $data->ln4trabajador3 ?? '',
            'ln4trabajador4' => $data->ln4trabajador4 ?? '',
            'ln2maquina1' => $data->ln2maquina1 ?? '',
            'ln2maquina2' => $data->ln2maquina2 ?? '',
            'ln2maquina3' => $data->ln2maquina3 ?? '',
            'ln2maquina4' => $data->ln2maquina4 ?? '',
            'ln3maquina1' => $data->ln3maquina1 ?? '',
            'ln3maquina2' => $data->ln3maquina2 ?? '',
            'ln3maquina3' => $data->ln3maquina3 ?? '',
            'ln3maquina4' => $data->ln3maquina4 ?? '',
            'ln4maquina1' => $data->ln4maquina1 ?? '',
            'ln4maquina2' => $data->ln4maquina2 ?? '',
            'ln4maquina3' => $data->ln4maquina3 ?? '',
            'ln4maquina4' => $data->ln4maquina4 ?? '',
            'ln2horas1' => $data->ln2horas1 ?? '',
            'ln2horas2' => $data->ln2horas2 ?? '',
            'ln2horas3' => $data->ln2horas3 ?? '',
            'ln2horas4' => $data->ln2horas4 ?? '',
            'ln3horas1' => $data->ln3horas1 ?? '',
            'ln3horas2' => $data->ln3horas2 ?? '',
            'ln3horas3' => $data->ln3horas3 ?? '',
            'ln3horas4' => $data->ln3horas4 ?? '',
            'ln4horas4' => $data->ln4horas4 ?? '',
            'ln4horas1' => $data->ln4horas1 ?? '',
            'ln4horas2' => $data->ln4horas2 ?? '',
            'ln4horas3' => $data->ln4horas3 ?? '',
            'fecha_salida_prevista' => $data->fecha_salida_prevista ?? '',
            'prioridad' => $data->prioridad ?? '',
            't_estimado' => $data->t_estimado ?? '',
            'trabajad_nuevo' => $data->trabajad_nuevo ? implode(',',$data->trabajad_nuevo) : '',
        ];
        
        return $params;
    }
}
