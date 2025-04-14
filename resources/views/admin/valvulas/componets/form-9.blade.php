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

    
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                PRESIÓN DE TRABAJO
            </div>
            <div class="p-2">
                <input type="text" name="prestrcuerp" value="{{$valvula->prestrcuerp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="prestrbacks" value="{{$valvula->prestrbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="prestrasb" value="{{$valvula->prestrasb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="prestra" value="{{$valvula->prestra}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                PRESIÓN DE PRUEBA
            </div>
            <div class="p-2">
                <input type="text" name="presprcuerp" value="{{$valvula->presprcuerp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="presprbacks" value="{{$valvula->presprbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="presprb" value="{{$valvula->presprb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="prespra" value="{{$valvula->prespra}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                TEMPERATURA (°C)
            </div>
            <div class="p-2">
                <input type="text" name="tempcuerp" value="{{$valvula->tempcuerp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="tempbacks" value="{{$valvula->tempbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="tempb" value="{{$valvula->tempb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="tempa" value="{{$valvula->tempa}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                CAUDAL FUGA PERMITIDO (GOTAS/MIN)
            </div>
            <div class="p-2">
                <input type="text" name="caudcuerp" value="{{$valvula->caudcuerp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="caudbacks" value="{{$valvula->caudbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="caudb" value="{{$valvula->caudb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="cauda" value="{{$valvula->cauda}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                NATURALEZA DEL FLUIDO
            </div>
            <div class="p-2">
                <input type="text" name="fluidcuer" value="{{$valvula->fluidcuer}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="fluidbacks" value="{{$valvula->fluidbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="fluidb" value="{{$valvula->fluidb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="fluida" value="{{$valvula->fluida}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                DIRECCIÓN DE LA PRUEBA
            </div>
            <div class="p-2">
                <input type="text" name="dircccuerp" value="{{$valvula->dircccuerp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="direccbacks" value="{{$valvula->direccbacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="direccb" value="{{$valvula->direccb}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="direcca" value="{{$valvula->direcca}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                CAUDAL DE LA FUGA (GOTAS/MIN)
            </div>
            <div class="p-2">
                <input type="text" name="gotacuer" value="{{$valvula->gotacuer}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="gotabacks" value="{{$valvula->gotabacks}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="gotab" value="{{$valvula->gotab}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="gotaa" value="{{$valvula->gotaa}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
            <div class="contents">
            <div class="p-2 text-left font-semibold text-sm">
                DURACIÓN PRUEBA (SEG.)
            </div>
            <div class="p-2">
                <input type="text" name="duracion_prueba_cuerpo" value="{{$valvula->duracion_prueba_cuerpo}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="duracion_prueba_backseat" value="{{$valvula->duracion_prueba_backseat}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="duracion_prueba_asientosbp" value="{{$valvula->duracion_prueba_asientosbp}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
            <div class="p-2">
                <input type="text" name="duracion_prueba_asientosap" value="{{$valvula->duracion_prueba_asientosap}}" class="w-full p-2 border border-gray-600 rounded-md">
            </div>
        </div>
    

    <!-- Resultado de la prueba -->
    <div class="p-2  text-right font-semibold text-sm">RESULTADO DE LA PRUEBA</div>
    <div class="p-2">
      <select class="w-full p-2  border border-gray-600 rounded-md" name="pruebcuer">
        <option>Selecciona</option>
        <option @selected($valvula->pruebcuer == 'Ok')>Ok</option>
        <option @selected($valvula->pruebcuer == 'No Ok')>No Ok</option>
      </select>
    </div>
    <div class="p-2">
      <select class="w-full p-2  border border-gray-600 rounded-md" name="pruebacks">
        <option>Selecciona</option>
        <option @selected($valvula->pruebacks == 'Ok')>Ok</option>
        <option @selected($valvula->pruebacks == 'No Ok')>No Ok</option>
      </select>
    </div>
    <div class="p-2">
      <select class="w-full p-2  border border-gray-600 rounded-md" name="pruebb">
        <option>Selecciona</option>
        <option @selected($valvula->pruebb == 'Ok')>Ok</option>
        <option @selected($valvula->pruebb == 'No Ok')>No Ok</option>
      </select>
    </div>
    <div class="p-2">
      <select class="w-full p-2  border border-gray-600 rounded-md" name="prueba">
        <option>Selecciona</option>
        <option @selected($valvula->prueba == 'Ok')>Ok</option>
        <option @selected($valvula->prueba == 'No Ok')>No Ok</option>
      </select>
    </div>

  </div>

  <!-- Notas -->
  <div class="text-xs text-gray-400 mt-3">
    * ASIENTOS B.P. (PRUEBA NEUMÁTICA REALIZADA A BAJA PRESIÓN SEGÚN API STD 598) <br>
    ** ASIENTOS A.P. (PRUEBA NEUMÁTICA REALIZADA A ALTA PRESIÓN SEGÚN API STD 598)
  </div>
</div>