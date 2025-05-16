@extends('admin.layout')
@section('content') 


<form action="{{ route($method, ['pedido' => '1']) }}" method="post" enctype="multipart/form-data" >
  @csrf
  @if ($method == 'pedidos.update')
    @method('PUT')
  @endif

  <input type="hidden" name="id" value="{{$pedido->id}}">
<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white mb-4">

  <div class="grid grid-cols-2 gap-4 mt-4">
    
    <label class="block">
      Fecha Entrada: 
      @if ($pedido->fecha)
      
      @php
          $fecha = '';
          try {
              $fecha = \Carbon\Carbon::createFromFormat('d-m-Y', $pedido->fecha)->format('Y-m-d');
          } catch (\Exception $e) {
              // Intenta con otro formato si necesario o deja la fecha vacía
              try {
                  $fecha = \Carbon\Carbon::parse($pedido->fecha)->format('Y-m-d');
              } catch (\Exception $e) {
                  $fecha = '';
              }
          }
      @endphp
      
      <input 
        type="date" 
        class="w-full bg-gray-200 p-2 rounded" 
        name="fecha" 
        value="{{ $fecha }}">

      @else
      <input 
        type="date" 
        class="w-full bg-gray-200 p-2 rounded" 
        name="fecha" 
        value="">
      @endif
      
    </label>
    <label class="block">Fecha salida prevista: {{$pedido->fecha_salida_prevista}} 
      @if ($pedido->fecha_salida_prevista)
          @php
          $fechaSalida = '';
          try {
              $fechaSalida = \Carbon\Carbon::createFromFormat('Y-m-d', $pedido->fecha_salida_prevista)->format('Y-m-d');
          } catch (\Exception $e) {
              // Intenta con otro formato si necesario o deja la fecha vacía
              try {
                  $fechaSalida = \Carbon\Carbon::parse($pedido->fecha_salida_prevista)->format('Y-m-d');
              } catch (\Exception $e) {
                  $fechaSalida = '';
              }
          }
      @endphp
      
      <input 
        type="date" 
        class="w-full bg-gray-200 p-2 rounded" 
        name="fecha_salida_prevista" 
        value="{{ $fechaSalida }}">
      @else
        <input 
          type="date" 
          class="w-full bg-gray-200 p-2 rounded" 
          name="fecha_salida_prevista" 
          value="">
      @endif
    </label>      
  </div>
  <div class="grid grid-cols-2 gap-4 mt-4">
    <label class="block">Tiempo estimado: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="t_estimado" value="{{$pedido->t_estimado}}"></label>
    <div class="mt-4">
      <label class="text-sm font-semibold mb-2 flex justify-between">
        <div>Operario</div>
        <div>
          <button class="bg-blue-500 text-white px-4 py-2 rounded ml-2 cursor-pointer" type="button" onclick="abrirModal()">Agregar</button>
          
        </div>
      </label>
      <select name="trabajad_nuevo[]"  class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" multiple id="trabajad_nuevo">
        <option >Seleccione</option>
        @php
          $trabajadores = explode(',', $pedido->trabajad_nuevo);
        @endphp 
        @foreach ($operarios as $operario)
          <option @selected(in_array($operario, $trabajadores)) value="{{ $operario }}">{{ $operario }}</option>
        @endforeach

        {{-- <option @selected($pedido->trabajad_nuevo == 'S. Cifuentes') value="S. Cifuentes">S. Cifuentes</option>
        <option @selected($pedido->trabajad_nuevo == 'C. Sastriques') value="C. Sastriques">C. Sastriques</option>
        <option @selected($pedido->trabajad_nuevo == 'A. del Valle') value="A. del Valle">A. del Valle</option>
        <option @selected($pedido->trabajad_nuevo == 'J.M. Fernandez') value="J.M. Fernandez">J.M. Fernandez</option>
        <option @selected($pedido->trabajad_nuevo == 'S.Lara') value="S.Lara">S.Lara</option>
        <option @selected($pedido->trabajad_nuevo == 'A. Luis') value="A. Luis">A. Luis</option>
        <option @selected($pedido->trabajad_nuevo == 'D. Muñoz') value="D. Muñoz">D. Muñoz</option>
        <option @selected($pedido->trabajad_nuevo == 'A. Porcar') value="A. Porcar">A. Porcar</option>
        <option @selected($pedido->trabajad_nuevo == 'D. Rambla') value="D. Rambla">D. Rambla</option>
        <option @selected($pedido->trabajad_nuevo == 'F. Reyes') value="F. Reyes">F. Reyes</option>
        <option @selected($pedido->trabajad_nuevo == 'A. Rodriguez') value="A. Rodriguez">A. Rodriguez</option>
        <option @selected($pedido->trabajad_nuevo == 'D. Sanchez') value="D. Sanchez">D. Sanchez</option>
        <option @selected($pedido->trabajad_nuevo == 'S. Tierraseca') value="S. Tierraseca">S. Tierraseca</option>
        <option @selected($pedido->trabajad_nuevo == 'D. Tornero') value="D. Tornero">D. Tornero</option>
        <option @selected($pedido->trabajad_nuevo == 'D. Torres') value="D. Torres">D. Torres</option>
        <option @selected($pedido->trabajad_nuevo == 'M. Vieira') value="M. Vieira">M. Vieira</option> --}}
      </select>
    </div>
    <label class="block">Orden trabajo OT: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="numpedido" value="{{$pedido->numpedido}}" placeholder="1861"></label>
    <div class="mt-4">
      <label class="block text-sm font-semibold mb-2">  
        Prioridad
      </label>
      <select name="prioridad" class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option>Seleccione</option>
        <option @selected($pedido->prioridad == '1') value="1">1</option>
        <option @selected($pedido->prioridad == '2') value="2">2</option>
        <option @selected($pedido->prioridad == '3') value="3">3</option>
      </select>
      <div class="mb-4">
        <textarea 
          class="w-full p-2 mt-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="observaciones"
          rows="3">{{$pedido->observaciones}}</textarea>
      </div>
      <div class="mb-4">
        <label class="block">Finalizado: <br>
          <input type="radio" name="finalizado" value="No" @checked('No' == $pedido->finalizado)> No
          <input type="radio" name="finalizado" value="Si" @checked('Si' == $pedido->finalizado)> Sí
        </label>
      </div>
    </div>
  </div>

  <div class="flex justify-end mt-4">
    <a href="{{ route('pedidos') }}" class="bg-red-500 text-white px-4 py-2 rounded">Cancelar</a>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 cursor-pointer">Guardar</button>
</div>
<div id="modalAgregarOperario" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
  <div class="bg-white rounded-lg shadow-lg p-6 w-1/3">
      <h2 class="text-lg font-semibold mb-4">Agregar Operario</h2>
      <div id="modalError" class="text-red-500 text-sm hidden mb-4"></div>
      <div class="mb-4">
          <label for="nombreOperario" class="block text-sm font-medium text-gray-700">Nombre del Operario</label>
          <input type="text" id="nombreOperario" name="nombreOperario" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el nombre del operario">
      </div>
      <div class="flex justify-end">
          <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded mr-2" onclick="cerrarModal()">Cancelar</button>
          <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="guardarOperario()">Guardar</button>
      </div>
  </div>
</div>
</form>
<!-- Modal -->
<script>
  function abrirModal() {
      document.getElementById('modalAgregarOperario').classList.remove('hidden');
  }

  function cerrarModal() {
      document.getElementById('modalAgregarOperario').classList.add('hidden');
      document.getElementById('nombreOperario').value = '';
      document.getElementById('modalError').classList.add('hidden');
  }

  function guardarOperario() {
      const nombreOperario = document.getElementById('nombreOperario').value;
      const modalError = document.getElementById('modalError');
      const trabajad_nuevo = document.getElementById('trabajad_nuevo');

      if (!nombreOperario) {
          modalError.textContent = 'El nombre del operario es obligatorio.';
          modalError.classList.remove('hidden');
          return;
      }

      // Enviar datos mediante AJAX
      fetch('{{ route('pedidos.agregarOperario') }}', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ nombreOperario })
      })
      .then(response => {
          if (!response.ok) {
              throw new Error('Error al guardar el operario.');
          }
          return response.json();
      })
      .then(data => {
          // Actualizar la lista de operarios (si es necesario)
          cerrarModal();
          const option = document.createElement('option');
          option.value = nombreOperario;
          option.textContent = nombreOperario;
          option.selected = true; // Seleccionar el nuevo operario
          trabajad_nuevo.appendChild(option);
          // Mostrar mensaje de éxito
          alert('Operario agregado correctamente.');
      })
      .catch(error => {
          modalError.textContent = error.message;
          modalError.classList.remove('hidden');
      });
  }
</script>
@endsection