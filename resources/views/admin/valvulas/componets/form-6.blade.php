<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <div class="grid grid-cols-3 gap-4">
    <!-- Cliente -->
    <div class="col-span-12">
      <label class="block text-sm font-semibold mb-2 INSTRUMENTOS DE MEDIDA">
        PARES DE APRIETE
      </label>
    </div>
  </div>

  <!-- EQUIPO UTILIZADO -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      Herramienta Utilizada
    </label>
    <select name="pares_apriete" class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option>SELECCIONA</option>
      <option @selected($valvula->pares_apriete == '1/2&quot; - HERRAMIENTA 22mm - PASO 1 (15/25) - PASO 2 (40/60) - PASO 3 (75)') value="1/2&quot; - HERRAMIENTA 22mm - PASO 1 (15/25) - PASO 2 (40/60) - PASO 3 (75)">1/2" - HERRAMIENTA 22mm - PASO 1 (15/25) - PASO 2 (40/60) - PASO 3 (75)</option>
      <option @selected($valvula->pares_apriete == '5/8&quot; - HERRAMIENTA 27mm - PASO 1 (25/40) - PASO 2 (65/90) - PASO 3 (115)') value="5/8&quot; - HERRAMIENTA 27mm - PASO 1 (25/40) - PASO 2 (65/90) - PASO 3 (115)">5/8" - HERRAMIENTA 27mm - PASO 1 (25/40) - PASO 2 (65/90) - PASO 3 (115)</option>
      <option @selected($valvula->pares_apriete == '3/4” - HERRAMIENTA 32mm - PASO 1 (50/80) - PASO 2 (130/180) - PASO 3 (240)') value="3/4” - HERRAMIENTA 32mm - PASO 1 (50/80) - PASO 2 (130/180) - PASO 3 (240)">3/4” - HERRAMIENTA 32mm - PASO 1 (50/80) - PASO 2 (130/180) - PASO 3 (240)</option>
      <option @selected($valvula->pares_apriete == '7/8” - HERRAMIENTA 36mm - PASO 1 (90/140) - PASO 2 (230/320) - PASO 3 (390)') value="7/8” - HERRAMIENTA 36mm - PASO 1 (90/140) - PASO 2 (230/320) - PASO 3 (390)">7/8” - HERRAMIENTA 36mm - PASO 1 (90/140) - PASO 2 (230/320) - PASO 3 (390)</option>
      <option @selected($valvula->pares_apriete == '1” - HERRAMIENTA 41mm - PASO 1 (130/200) - PASO 2 (330/450) - PASO 3 (590)') value="1” - HERRAMIENTA 41mm - PASO 1 (130/200) - PASO 2 (330/450) - PASO 3 (590)">1” - HERRAMIENTA 41mm - PASO 1 (130/200) - PASO 2 (330/450) - PASO 3 (590)</option>
      <option @selected($valvula->pares_apriete == '1 1/8” - HERRAMIENTA 46mm - PASO 1 (180/280) - PASO 2 (460/640) - PASO 3 (840)') value="1 1/8” - HERRAMIENTA 46mm - PASO 1 (180/280) - PASO 2 (460/640) - PASO 3 (840)">1 1/8” - HERRAMIENTA 46mm - PASO 1 (180/280) - PASO 2 (460/640) - PASO 3 (840)</option>
      <option @selected($valvula->pares_apriete == '1 1/4” - HERRAMIENTA 51mm - PASO 1 (240/360) - PASO 2 (600/840) - PASO 3 (1200)') value="1 1/4” - HERRAMIENTA 51mm - PASO 1 (240/360) - PASO 2 (600/840) - PASO 3 (1200)">1 1/4” - HERRAMIENTA 51mm - PASO 1 (240/360) - PASO 2 (600/840) - PASO 3 (1200)</option>
      <option @selected($valvula->pares_apriete == '1 3/8” - HERRAMIENTA 55mm - PASO 1 (320/480) - PASO 2 (800/1200) - PASO 3 (1600)') value="1 3/8” - HERRAMIENTA 55mm - PASO 1 (320/480) - PASO 2 (800/1200) - PASO 3 (1600)">1 3/8” - HERRAMIENTA 55mm - PASO 1 (320/480) - PASO 2 (800/1200) - PASO 3 (1600)</option>
      <option @selected($valvula->pares_apriete == '1 1/2” - HERRAMIENTA 60mm - PASO 1 (420/620) - PASO 2 (1020/1440) - PASO 3 (2250)') value="1 1/2” - HERRAMIENTA 60mm - PASO 1 (420/620) - PASO 2 (1020/1440) - PASO 3 (2250)">1 1/2” - HERRAMIENTA 60mm - PASO 1 (420/620) - PASO 2 (1020/1440) - PASO 3 (2250)</option>
      <option @selected($valvula->pares_apriete == 'OTROS') value="OTROS">OTROS</option>
</select>
  </div>
  <div class="mt-1">
    <label class="block text-sm font-semibold mb-2">
      Otra Herramienta Utilizada
    </label>
    <input type="text" id="" class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" name="pares_apriete_otros" value="{{$valvula->pares_apriete_otros}}">
  </div>
  <!-- Repuestos Stock -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      Pasos Completados
    </label>
   
    <div class="flex items-center">
      <input id="default-checkbox" @checked($valvula->par_apriete_paso1 == 'Sí') type="checkbox" value="Si" name="par_apriete_paso1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="default-checkbox" class="ms-2 text-sm font-medium">Paso 1</label>
    </div>
    <div class="flex items-center">
      <input id="checked-checkbox" @checked($valvula->par_apriete_paso2 == 'Sí') type="checkbox" value="Si" name="par_apriete_paso2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="checked-checkbox" class="ms-2 text-sm font-medium">Paso 2</label>
    </div>
    <div class="flex items-center">
      <input id="checked-checkbox" @checked($valvula->par_apriete_paso3 == 'Sí') type="checkbox" value="Si" name="par_apriete_paso3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
      <label for="checked-checkbox" class="ms-2 text-sm font-medium">Paso 3</label>
    </div>

  </div>
</div>
