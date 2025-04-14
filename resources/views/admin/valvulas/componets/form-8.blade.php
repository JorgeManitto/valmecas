<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <div class="">
    <div class="col-span-12">
      <label class="block text-sm font-semibold mb-2 text-center">
        PRUEBAS
      </label>
   </div>
         <table class="w-full border border-gray-700">
           <tbody>
             <!-- Fila de opciones -->
             <tr class="border-b border-gray-700">
               <td class="p-2 font-semibold">PRUEBA CUERPO:</td>
               <td class="md:p-2 text-end">
                 <label class="md:mr-4"><input type="radio" name="pr_visual_cuerpo" class="mr-1" @checked($valvula->pr_visual_cuerpo == 'Si') value="Si">Sí</label>
                 <label><input type="radio" name="pr_visual_cuerpo" class="mr-1" @checked($valvula->pr_visual_cuerpo == 'No') value="No">No</label>
                 <label class="md:mr-4"><input type="radio" name="pr_visual_cuerpo" class="mr-1" @checked($valvula->pr_visual_cuerpo == 'No Aplica') value="No Aplica">No Aplica</label>
                </td>
             </tr>
   
             <tr class="border-b border-gray-700">
               <td class="p-2 font-semibold">PRUEBA CIERRES:</td>
               <td class="md:p-2 text-end">
                 <label class="md:mr-4"><input type="radio" name="pr_visual_cierres" class="mr-1" @checked($valvula->pr_visual_cierres == 'Si') value="Si"> Sí</label>
                 <label><input type="radio" name="pr_visual_cierres" class="mr-1" @checked($valvula->pr_visual_cierres == 'No') value="No"> No</label>
                 <label class="md:mr-4"><input type="radio" name="pr_visual_cierres" class="mr-1"  @checked($valvula->pr_visual_cierres == 'No Aplica') value="No Aplica"> No Aplica</label>
               </td>
             </tr>
   
             <tr class="border-b border-gray-700">
               <td class="p-2 font-semibold">PRUEBA TARADO:</td>
               <td class="md:p-2 text-end">
                 <label class="md:mr-4"><input type="radio" name="pr_visual_tarado" class="mr-1"@checked($valvula->pr_visual_tarado == 'Si') value="Si"> Sí</label>
                 <label><input type="radio" name="pr_visual_tarado" class="mr-1"@checked($valvula->pr_visual_tarado == 'No')value="No"> No</label>
                 <label class="md:mr-4"><input type="radio" name="pr_visual_tarado" class="mr-1" @checked($valvula->pr_visual_tarado == 'No Aplica') value="No Aplica"> No Aplica</label>
               </td>
             </tr>
   
             <tr class="border-b border-gray-700">
               <td class="p-2 font-semibold">PRUEBA FUELLES:</td>
               <td class="md:p-2 text-end">
                 <label class="md:mr-4"><input type="radio" name="pr_visual_fuelles" class="mr-1"@checked($valvula->pr_visual_fuelles == 'Si') value="Si"> Sí</label>
                 <label><input type="radio" name="pr_visual_fuelles" class="mr-1"@checked($valvula->pr_visual_fuelles == 'No') value="No"> No</label>
                 <label class="md:mr-4"><input type="radio" name="pr_visual_fuelles" class="mr-1" @checked($valvula->pr_visual_fuelles == 'No Aplica') value="No Aplica"> No Aplica</label>
               </td>
             </tr>

           </tbody>
         </table>
       </div>
 </div>