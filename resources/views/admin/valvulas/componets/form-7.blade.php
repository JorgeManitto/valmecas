<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <!-- Encabezado -->
  <div class=" text-center text-lg font-semibold p-2 rounded-t-md">
    DATOS DE LAS JUNTAS
  </div>

  <!-- Tabla -->
  <table class="w-full border border-gray-700">
    <tbody>
      <!-- Fila -->
      <tr class="border-b border-gray-700">
        <td class="p-2  font-semibold text-left">DIÁMETRO INTERIOR:</td>
        <td class="p-2"><input type="text" value="{{$valvula->jundint1}}" name="jundint1" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundint2}}" name="jundint2" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundint3}}" name="jundint3" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundint4}}" name="jundint4" class="w-full p-2  border border-gray-600 rounded-md"></td>
      </tr>

      <tr class="border-b border-gray-700">
        <td class="p-2  font-semibold text-left">DIÁMETRO EXTERIOR:</td>
        <td class="p-2"><input type="text" value="{{$valvula->jundex1}}" name="jundex1" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundex2}}" name="jundex2" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundex3}}" name="jundex3" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jundex4}}" name="jundex4" class="w-full p-2  border border-gray-600 rounded-md"></td>
      </tr>

      <tr class="border-b border-gray-700">
        <td class="p-2  font-semibold text-left">GRUESO:</td>
        <td class="p-2"><input type="text" value="{{$valvula->jungrues1}}" name="jungrues1" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jungrues2}}" name="jungrues2" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jungrues3}}" name="jungrues3" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->jungrues4}}" name="jungrues4" class="w-full p-2  border border-gray-600 rounded-md"></td>
      </tr>

      <tr class="border-b border-gray-700">
        <td class="p-2  font-semibold text-left">TIPO:</td>
        <td class="p-2"><input type="text" value="{{$valvula->juntipo1}}" name="juntipo1" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juntipo2}}" name="juntipo2" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juntipo3}}" name="juntipo3" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juntipo4}}" name="juntipo4" class="w-full p-2  border border-gray-600 rounded-md"></td>
      </tr>

      <tr>
        <td class="p-2  font-semibold text-left">CANTIDAD:</td>
        <td class="p-2"><input type="text" value="{{$valvula->juncantid1}}" name="juncantid1" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juncantid2}}" name="juncantid2" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juncantid3}}" name="juncantid3" class="w-full p-2  border border-gray-600 rounded-md"></td>
        <td class="p-2"><input type="text" value="{{$valvula->juncantid4}}" name="juncantid4" class="w-full p-2  border border-gray-600 rounded-md"></td>
      </tr>
    </tbody>
  </table>
</div>
