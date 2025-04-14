<div class="bg-white p-4 rounded-lg shadow-lg max-w-4xl mx-auto">
  <!-- Sección Válvulas de Control -->
  <div class="bg-blue-600 text-white text-center text-xl font-bold py-3 rounded-md">
      VÁLVULAS DE CONTROL
  </div>

  <div class=" p-6 rounded-md mt-4 flex flex-col md:flex-row items-center">
      <!-- Formulario -->
      <div class="w-full md:w-2/3 space-y-2">
          <div class="grid grid-cols-2 items-center gap-2">
              <label class=" font-semibold">A) AVANCE ENTRE BRIDAS</label>
              <input type="text" class="w-full p-2 rounded-md border border-gray-600 focus:ring focus:ring-blue-400" name="avance_entre_bridas" value="{{$valvula->avance_entre_bridas}}">
          </div>
          <div class="grid grid-cols-2 items-center gap-2">
              <label class=" font-semibold">B) ALTO</label>
              <input type="text" class="w-full p-2 rounded-md border border-gray-600 focus:ring focus:ring-blue-400" name="cota_alto" value="{{$valvula->cota_alto}}">
          </div>
          <div class="grid grid-cols-2 items-center gap-2">
              <label class=" font-semibold">C) ANCHO</label>
              <input type="text" class="w-full p-2 rounded-md border border-gray-600 focus:ring focus:ring-blue-400" name="cota_ancho" value="{{$valvula->cota_ancho}}">
          </div>
          <div class="grid grid-cols-2 items-center gap-2">
              <label class=" font-semibold">D) PROFUNDIDAD</label>
              <input type="text" class="w-full p-2 rounded-md border border-gray-600 focus:ring focus:ring-blue-400" name="cota_profundidad" value="{{$valvula->cota_profundidad}}">
          </div>
          <div class="grid grid-cols-2 items-center gap-2">
              <label class=" font-semibold">E) POSICIÓN ACTUADOR</label>
              <input type="text" class="w-full p-2 rounded-md border border-gray-600 focus:ring focus:ring-blue-400" name="cota_posicion_actuador" value="{{$valvula->cota_posicion_actuador}}">
          </div>
      </div>

      <!-- Imagen -->
      <div class="w-full md:w-1/3 mt-4 md:mt-0">
          <div class="flex justify-end w-full md:mx-4">
            <img src="{{ asset('/imagen_cota_cvs.png') }}" alt="Esquema Válvula" class="w-full max-w-xs border border-gray-700 rounded-md">
          </div>
      </div>
  </div>


</div>
