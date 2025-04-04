@extends('admin.layout')
@section('content') 

<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white">
  <div class="grid md:grid-cols-3 gap-4 border-b pb-4 mb-4">
      <div>
          <h1 class="font-bold">CASTELLÓN VÁLVULAS Y MECANIZADOS S.L.</h1>
      </div>
      <div class="md:text-center font-bold">F-023<br>FICHA TÉCNICA DE CONTROL Y DIAGNOSIS DE VÁLVULAS</div>
      <div class="md:text-right font-bold">REVISIÓN 1</div>
  </div>
  
  <div class="grid grid-cols-2 gap-4">
      <label class="block">Oferta: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="oferta"></label>
      <label class="block">Cliente: 
        <select class="w-full bg-gray-200 p-2 rounded" name="cliente">
          <option>Selecciona</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-3 gap-4 mt-4">
      <label class="block">Motivo Intervención:
        <select class="w-full bg-gray-200 p-2 rounded">
          <option>Selecciona</option>
          {{--  --}}
        </select>
      </label>
      <label class="block">Finalizado: <br>
          <input type="radio" name="finaliz" value="si"> Sí
          <input type="radio" name="finaliz" value="no"> No
      </label>
      <label class="block">W.O.: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="wo"></label>
  </div>

  <div class="grid grid-cols-3 gap-4 mt-4">
      <label class="block">Recepciona: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="recepciona"></label>
      <label class="block">Fecha Entrada: <input type="date" class="w-full bg-gray-200 p-2 rounded" name="fentra"></label>
      <label class="block">Fecha Salida: <input type="date" class="w-full bg-gray-200 p-2 rounded" name="fsalida"></label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Sector de Procedencia: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="sector"></label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">TAG: <input type="text" placeholder="Ej: SV-XXXX-ZZZ" class="w-full bg-gray-200 p-2 rounded" name="tag_item"></label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Tipo: 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipo">
          <option>Selecciona</option>
        </select>
      </label>
      <label class="block">Accionamiento: 
        <select class="w-full bg-gray-200 p-2 rounded" name="accionamiento">
          <option>Selecciona</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Diámetro: 
        <select class="w-full bg-gray-200 p-2 rounded" name="diametro">
          <option>Selecciona</option>
        </select>
      </label>
      <label class="block">Junta Brida Entrada: 
        <select class="w-full bg-gray-200 p-2 rounded">
          {{--  --}}
          <option>Selecciona</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Diámetro Salida: 
        <select class="w-full bg-gray-200 p-2 rounded">
          {{--  --}}
          <option>Selecciona</option>
        </select>
      </label>
      <label class="block">Junta Brida Salida: 
        <select class="w-full bg-gray-200 p-2 rounded">
          {{--  --}}
          <option>Selecciona</option>
        </select>
      </label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material Cuerpo: 
        {{--  --}}
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="">
      </label>
      <label class="block">Material Bonete:
        {{--  --}}
        <input type="text" class="w-full bg-gray-200 p-2 rounded">
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material de Asiento: 
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="material_asiento">
      </label>
      <label class="block">Tipo de Unión a Tubería: 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipo_union">
          <option>Selecciona</option>
        </select>
      </label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material de Cierre: 
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="material_cierre">
      </label>
      <label class="block">Tipo de Cierre (Simple/Doble): 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipo_cierre">
          <option>Selecciona</option>
        </select>
      </label>
  </div>
</div>

@include('admin.valvulas.componets.tabla-estado-trabajo')
@include('admin.valvulas.componets.cliente-solicitud')
@include('admin.valvulas.componets.form-4')
@include('admin.valvulas.componets.form-5')
@include('admin.valvulas.componets.form-6')
@include('admin.valvulas.componets.form-7')
@include('admin.valvulas.componets.form-8')
@include('admin.valvulas.componets.form-9')
@include('admin.valvulas.componets.form-10')
@include('admin.valvulas.componets.form-11')
@include('admin.valvulas.componets.form-12')
@include('admin.valvulas.componets.form-13')
@include('admin.valvulas.componets.form-14')

<div class="sticky bottom-0 flex justify-end">

  <button class="bg-green-700 text-white font-semibold rounded-lg p-2">Guardar</button>
</div>

@endsection

