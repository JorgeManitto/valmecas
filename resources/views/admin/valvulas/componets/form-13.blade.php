
<!-- Tabla de datos -->
<div class="w-full max-w-4xl mx-auto  rounded-lg shadow-lg p-4 bg-white ">
  <!-- Imagen superior -->
  <div class="rounded-lg my-8 flex items-center justify-center">
    <img src="{{ asset('/medidasSV.jpg') }}" alt="Diagramas técnicos" class="max-w-full h-auto">
  </div>
  <div class="grid grid-cols-4 gap-2">
      <!-- Primera fila -->
      <div class="bg-gray-200 p-2 text-center font-semibold rounded">A</div>
      <input type="text" class=" border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="sva" value="{{ $valvula->sva }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">B</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svb" value="{{ $valvula->svb }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">C</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svc" value="{{ $valvula->svc }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">D</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svd" value="{{ $valvula->svd }}">

      <!-- Segunda fila -->
      <div class="bg-gray-200 p-2 text-center font-semibold rounded">E</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="sve" value="{{ $valvula->sve }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">F</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svf" value="{{ $valvula->svf }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">G</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svg" value="{{ $valvula->svg }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">H</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svh" value="{{ $valvula->svh }}">

      <!-- Tercera fila -->
      <div class="bg-gray-200 p-2 text-center font-semibold rounded">I</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svi" value="{{ $valvula->svi }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">J</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svj" value="{{ $valvula->svj }}">

      <div class="bg-gray-200 p-2 text-center font-semibold rounded">K</div>
      <input type="text" class="  border border-gray-600 rounded px-2 py-1 focus:outline-none focus:ring focus:ring-blue-500" name="svk" value="{{ $valvula->svk }}">
  </div>
</div>

<!-- Tabla de datos -->
@if ($method == 'valvulas.update')
  <div class="w-full max-w-4xl mx-auto rounded-lg shadow-lg p-4 bg-white mt-4">
    @foreach($imagenes as $img)
      <div class="rounded-lg my-8 flex items-center justify-center">
        <img src="{{ $img }}" alt="Diagramas técnicos" class="max-w-full h-auto">
      </div>
    @endforeach
  </div>
@endif
