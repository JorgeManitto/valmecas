<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white">
      <!-- Sección Válvulas de Seguridad -->
  <div class="bg-red-600 text-white text-center text-xl font-bold py-3 rounded-md mb-6">
    VÁLVULAS DE SEGURIDAD
    </div>
  <div class="mb-4">
      <label class="block  text-sm font-bold mb-2">PRE-POPPING</label>
      <select class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="prepopping" id="prepopping">
        <option>Selecciona</option>
        <option @selected($valvula->prepopping == 'Ok') value="Ok">Ok</option>
        <option @selected($valvula->prepopping == 'Fuga') value="Fuga">Fuga</option>
        <option @selected($valvula->prepopping == 'Bloqueada') value="Bloqueada">Bloqueada</option>
        <option @selected($valvula->prepopping == 'No dispara a presion de set') value="No dispara a presion de set">No dispara a presion de set</option>
        <option @selected($valvula->prepopping == 'Abierta') value="Abierta">Abierta</option>
        <option @selected($valvula->prepopping == 'No reobtura') value="No reobtura">No reobtura (APUNTAR PRESION DISPARO)</option>
      </select>

      <div style="{{ ($valvula->prepopping != 'No reobtura' || $valvula->prepopping == 'No dispara a presion de set') ? 'display: none;' :''}}" id="presion_prepopping" class="mt-3">
            <label class="block  text-sm font-bold ">PRESIÓN PRE-POPPING</label>
            <input type="text"  name="presion_prepopping"  class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500 " value="{{$valvula->presion_prepopping}}" placeholder="PRESION PRE-POPPING">
      </div>
      <script>
            const prepoppingSelect = document.getElementById('prepopping');
            const presionPrepoppingDiv = document.getElementById('presion_prepopping');
    
            prepoppingSelect.addEventListener('change', function() {
                if (prepoppingSelect.value == 'No reobtura' || prepoppingSelect.value == 'No dispara a presion de set') {
                    // Mostrar el div si la opción seleccionada es "No reobtura" o "No dispara a presion de set"
                   presionPrepoppingDiv.style.display = 'block';
                } else {
                    presionPrepoppingDiv.style.display = 'none';
                } 
            });
      </script>
  </div>

  <div class="grid grid-cols-2 gap-4  rounded-lg">
      <div>
          <label class="block  text-sm font-bold mb-1">FLUIDO DE PRUEBA</label>
          <select class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="svfluidpru">
              <option value="">Selecciona</option>
              <option @selected($valvula->svfluidpru == 'Agua') value="Agua">Agua</option>
              <option @selected($valvula->svfluidpru == 'Nitrogeno Aire') value="Nitrogeno Aire">Nitrogeno Aire</option>
              <option @selected($valvula->svfluidpru == 'Gasoil') value="Gasoil">Gasoil</option>
              <option @selected($valvula->svfluidpru == 'Aceite') value="Aceite">Aceite</option>
          </select>
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">PRESIÓN DE DISPARO</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{$valvula->svprdisp}}" name="svprdisp" id="presion_disparo">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">CRITERIO DE ACEPTACIÓN (%)</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" value="3" disabled name="svcriteracep">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">PRESIÓN DE FUGA LÍMITE 90%</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="svprfuga90" value="{{$valvula->svprfuga90}}" id="presion_fuga_90">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">LÍMITE SUPERIOR</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="svlimsup" value="{{$valvula->svlimsup}}" id="limite_superior">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">FUGA PERMITIDA</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="svfugperm" value="{{$valvula->svfugperm}}">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">LÍMITE INFERIOR</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="svliminf" value="{{$valvula->svliminf}}" id="limite_inferior">
      </div>
      <div>
          <label class="block  text-sm font-bold mb-1">PRUEBA FUELLE (A+TAG)</label>
          <input type="text" class="w-full p-2 rounded   border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" name="pr_fuelle" value="{{$valvula->pr_fuelle}}">
      </div>
  </div>
</div>
<script>
    const presionDisparo = document.getElementById('presion_disparo');
    const presionFuga90 = document.getElementById('presion_fuga_90');
    const limiteSuperior = document.getElementById('limite_superior');
    const limiteInferior = document.getElementById('limite_inferior');

    presionDisparo.addEventListener('input', function() {
        const valor = parseInt(presionDisparo.value);
        if (!isNaN(valor)) {
            const limiteInferiorValor = valor * 0.982;
            limiteInferior.value = limiteInferiorValor.toFixed(2);
        } else {
            limiteInferior.value = '';
        }
    });
    presionDisparo.addEventListener('input', function() {
        const valor = parseInt(presionDisparo.value);
        if (!isNaN(valor)) {
            const limiteSuperiorValor = valor * 1.018;
            limiteSuperior.value = limiteSuperiorValor.toFixed(2);
        } else {
            limiteSuperior.value = '';
        }
    });
    presionDisparo.addEventListener('input', function() {
        const valor = parseFloat(presionDisparo.value);
        if (!isNaN(valor)) {
            const limiteFuga90Valor = valor * 0.9;
            presionFuga90.value = limiteFuga90Valor.toFixed(2);
        } else {
            presionFuga90.value = '';
        }
    });
</script>