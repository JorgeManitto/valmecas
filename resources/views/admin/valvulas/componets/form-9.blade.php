<div class="bg-white p-4 rounded-lg shadow-lg max-w-4xl mx-auto">
  <!-- Encabezado -->
  <div class=" text-center text-lg font-semibold p-3 rounded-t-md uppercase">
    PRUEBA (CUMPLIMENTAR EXCEPTO SV’S)
  </div>

  <!-- Tabla -->
  <div class="grid grid-cols-5 gap-2 border border-gray-700">
    <!-- Cabecera -->
    <div class=" p-2 text-sm font-semibold text-center">TIPO PRUEBA</div>
    <div class=" p-2 text-sm font-semibold text-center">CUERPO</div>
    <div class=" p-2 text-sm font-semibold text-center">BACK SEAT</div>
    <div class=" p-2 text-sm font-semibold text-center">ASIENTOS B.P.*</div>
    <div class=" p-2 text-sm font-semibold text-center">ASIENTOS A.P.**</div>

    @php
    $labels = [
        'PRESIÓN DE TRABAJO',
        'PRESIÓN DE PRUEBA',
        'TEMPERATURA (°C)',
        'CAUDAL FUGA PERMITIDO (GOTAS/MIN)',
        'NATURALEZA DEL FLUIDO',
        'DIRECCIÓN DE LA PRUEBA',
        'CAUDAL DE LA FUGA (GOTAS/MIN)',
        'DURACIÓN PRUEBA (SEG.)'
        ];
    @endphp

    @foreach ($labels as $label)
        <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                {{ $label }}
            </div>
            <div class="p-2">
                <input type="text" name="datos[{{ $label }}][]" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="datos[{{ $label }}][]" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="datos[{{ $label }}][]" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="datos[{{ $label }}][]" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
    @endforeach


    <!-- Resultado de la prueba -->
    <div class="p-2  text-right font-semibold text-sm">RESULTADO DE LA PRUEBA</div>
    <div class="p-2"><select class="w-full p-2  border border-gray-600 rounded-md"><option>Selecciona</option></select></div>
    <div class="p-2"><select class="w-full p-2  border border-gray-600 rounded-md"><option>Selecciona</option></select></div>
    <div class="p-2"><select class="w-full p-2  border border-gray-600 rounded-md"><option>Selecciona</option></select></div>
    <div class="p-2"><select class="w-full p-2  border border-gray-600 rounded-md"><option>Selecciona</option></select></div>
  </div>

  <!-- Notas -->
  <div class="text-xs text-gray-400 mt-3">
    * ASIENTOS B.P. (PRUEBA NEUMÁTICA REALIZADA A BAJA PRESIÓN SEGÚN API STD 598) <br>
    ** ASIENTOS A.P. (PRUEBA NEUMÁTICA REALIZADA A ALTA PRESIÓN SEGÚN API STD 598)
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
