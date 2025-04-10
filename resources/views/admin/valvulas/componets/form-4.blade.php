<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <div class="">
    
    <!-- Notas 1 -->
    <div class="col-span-12">
      <label class="block text-sm font-semibold mb-2 text-center">
        OTROS MATERIALES Y/O REPUESTOS UTILIZADOS:
      </label>
      <textarea name="" id="" class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>

    <!-- Notas 2 -->
    <div class="col-span-12">
      <label class="block text-sm font-semibold mb-2 text-center">
        RECOMENDACIONES / OBSERVACIONES / INCIDENCIAS
      </label>
      <textarea name="" id="" class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
    </div>
  </div>

  <!-- Repuestos Stock -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      REPUESTOS STOCK:
    </label>
    <input 
      type="text" 
      class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
    />
  </div>
  <div class="mt-10">
    <!-- Incidencias Graves -->
    <div class="mb-4">
      <label class="block text-sm font-semibold mb-2">INCIDENCIAS GRAVES</label>
      <input 
        type="text" 
        class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      <textarea 
        class="w-full p-2 mt-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        rows="3"></textarea>
    </div>
  
    <!-- Montaje / Desmontaje -->
    <div class="items-start">
      <div class="text-center py-4 rounded-md md:flex items-center h-full">
        <span class="text-lg font-bold">MONTAJE / DESMONTAJE</span>
      </div>
  
      <div class="">
        <table class="w-full border border-gray-700">
          <tbody>
            <!-- Fila de opciones -->
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">ARNÉS:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="montdesm_arnes" class="mr-1" @checked($valvula->montdesm_arnes == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="montdesm_arnes" class="mr-1" @checked($valvula->montdesm_arnes == 'Si')> Sí</label>
                <label><input type="radio" name="montdesm_arnes" class="mr-1" @checked($valvula->montdesm_arnes == 'No')> No</label>
              </td>
            </tr>
  
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">ANDAMIO:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="montdesm_andamio" class="mr-1"  @checked($valvula->montdesm_andamio == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="montdesm_andamio" class="mr-1" @checked($valvula->montdesm_andamio == 'Si')> Sí</label>
                <label><input type="radio" name="montdesm_andamio" class="mr-1" @checked($valvula->montdesm_andamio == 'No')> No</label>
              </td>
            </tr>
  
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">GRÚA:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="montdesm_grua" class="mr-1"  @checked($valvula->montdesm_grua == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="montdesm_grua" class="mr-1" @checked($valvula->montdesm_grua == 'Si')> Sí</label>
                <label><input type="radio" name="montdesm_grua" class="mr-1" @checked($valvula->montdesm_grua == 'No')> No</label>
              </td>
            </tr>
  
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">GRÚA GRAN TONELAJE:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="montdesm_gruagranton" class="mr-1"  @checked($valvula->montdesm_gruagranton == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="montdesm_gruagranton" class="mr-1" @checked($valvula->montdesm_gruagranton == 'Si')> Sí</label>
                <label><input type="radio" name="montdesm_gruagranton" class="mr-1" @checked($valvula->montdesm_gruagranton == 'No')> No</label>
              </td>
            </tr>
  
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">TRACTEL:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="montdesm_tractel" class="mr-1"  @checked($valvula->montdesm_tractel == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="montdesm_tractel" class="mr-1" @checked($valvula->montdesm_tractel == 'Si')> Sí</label>
                <label><input type="radio" name="montdesm_tractel" class="mr-1" @checked($valvula->montdesm_tractel == 'No')> No</label>
              </td>
            </tr>
  
            <tr class="border-b border-gray-700">
              <td class="p-2 font-semibold">QUITAR CALORIFUGADO:</td>
              <td class="md:p-2">
                <label class="md:mr-4"><input type="radio" name="quitar_calorifugado" class="mr-1"  @checked($valvula->quitar_calorifugado == 'No Aplica')> No Aplica</label>
                <label class="md:mr-4"><input type="radio" name="quitar_calorifugado" class="mr-1" @checked($valvula->quitar_calorifugado == 'Si')> Sí</label>
                <label><input type="radio" name="quitar_calorifugado" class="mr-1" @checked($valvula->quitar_calorifugado == 'No')> No</label>
              </td>
            </tr>
  
            <!-- Ubicación -->
            <tr>
              <td class="p-2 font-semibold">UBICACIÓN:</td>
              <td class="md:p-2">
                <input 
                  type="text" 
                  class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

