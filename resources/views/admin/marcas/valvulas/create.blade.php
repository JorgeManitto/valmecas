@extends('admin.layout')
@section('content')
<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white">
  <div class="grid grid-cols-3 gap-4 border-b pb-4 mb-4">
      <div>
          <h1 class="font-bold">Agregar Nueva Marca</h1>
      </div>
      
  </div>
  <form action="{{ route('marcas.valvulas.store') }}" method="post">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <label class="block">Nombre: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="nombre" required></label>
        <label class="block">Estado: 
          <select class="w-full bg-gray-200 p-2 rounded" name="estado" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
          </select>
        </label>
      </div>
      <div class="flex justify-end mt-5">
        <button class="bg-green-600 text-white rounded-lg px-4 py-2 flex items-center" type="submit">Guardar</button>
      </div>
  </form>


</div>
@endsection