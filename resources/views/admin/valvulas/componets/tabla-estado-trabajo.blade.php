<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white">
    @php
        $solicita_repuesto = [
            'CORRECTO' => 'CORRECTO',
            'ROTO' => 'ROTO',
            'AGRIETADO' => 'AGRIETADO',
            'CORROSION LEVE' => 'CORROSION LEVE',
            'CORROSION SEVERA' => 'CORROSION SEVERA',
            'DESGASTADO' => 'DESGASTADO',
            'MARCADO' => 'MARCADO',
            'FALTA' => 'FALTA',
            'SUCIO' => 'SUCIO',
        ];
        $trabajo_realizado = [
            'Sustituido' => 'Sustituido',
            'Lapea' => 'Lapea',
            'Reparado' => 'Reparado',
            'Limpiado' => 'Limpiado',
            'Chorreado-pintado' => 'Chorreado-pintado',
        ];
    @endphp
    <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
              <tr class="bg-gray-200">
                  <th class="p-2 text-left"></th>
                  <th class="p-2 text-left">ESTADO</th>
                  <th class="p-2 text-left">TRABAJO REALIZADO</th>
              </tr>
          </thead>
          <tbody>
              <tr style="border-bottom: 1px solid #ccc;">
                  <td class="p-2">
                      <div class="flex items-center">
                          <span class="mr-2 font-bold">CUERPO</span>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox" name="repuesto_cuerpo" class="mr-2" @checked($valvula->repuesto_cuerpo == 'Si') value="Si" >
                          <label for="cuerpo_solicita">¿SOLICITA REPUESTO?</label>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox" id="cuerpo_utiliza" class="mr-2" name="u_repuesto_cuerpo" @checked($valvula->u_repuesto_cuerpo == 'Si') value="Si" >
                          <label for="cuerpo_utiliza">¿UTILIZA REPUESTO?</label>
                      </div>
                  </td>
                  <td class="p-2">
                      <select class="w-full border p-1 rounded" name="estcuerpo1">
                        <option value="">Selecciona</option>
                        @foreach ($solicita_repuesto as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estcuerpo1)>{{ $value }}</option>
                        @endforeach
                      </select>
                  </td>
                  <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estcuerpo2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estcuerpo2)>{{ $value }}</option>
                        @endforeach
                    </select>
                  </td>
              </tr>
              <tr>
                  <td class="p-2">
                      <div class="flex items-center">
                          <span class="mr-2 font-bold">BRIDAS</span>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox"  class="mr-2" name="repuesto_bridas" @checked($valvula->repuesto_bridas == 'Si') value="Si" >
                          <label for="bridas_solicita">¿SOLICITA REPUESTO?</label>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox" class="mr-2" name="u_repuesto_bridas" @checked($valvula->u_repuesto_bridas == 'Si') value="Si" >
                          <label for="bridas_utiliza">¿UTILIZA REPUESTO?</label>
                      </div>
                  </td>
                    <td class="p-2">
                        <select class="w-full border p-1 rounded" name="estbridas1">
                            <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estbridas1)>{{ $value }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estbridas2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estbridas2)>{{ $value }}</option>
                        @endforeach
                    </select>
                    </td>
              </tr>
              <tr>
                  <td class="p-2">
                      <div class="flex items-center">
                          <span class="mr-2 font-bold">ASIENTOS DE CUERPO / TOBERA (SV's)</span>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox" class="mr-2" name="repuesto_asientocuerpo" @checked($valvula->repuesto_asientocuerpo == 'Si') value="Si" >
                          <label for="asientos_cuerpo_solicita">¿SOLICITA REPUESTO?</label>
                      </div>
                      <div class="flex items-center">
                          <input type="checkbox" id="asientos_cuerpo_utiliza" class="mr-2" name="u_repuesto_asientocuerpo" @checked($valvula->u_repuesto_asientocuerpo == 'Si') value="Si" >
                          <label for="asientos_cuerpo_utiliza">¿UTILIZA REPUESTO?</label>
                      </div>
                  </td>
                    <td class="p-2">
                        <select class="w-full border p-1 rounded" name="estasiencuer1">
                            <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estasiencuer1)>{{ $value }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estasiencuer2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estasiencuer2)>{{ $value }}</option>
                        @endforeach
                    </select>
                    </td>
              </tr>
              <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">ASIENTOS OBTURADOR / DISCO (SV's)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" name="repuesto_asientoobturador" @checked($valvula->repuesto_asientoobturador == 'Si') value="Si" >
                        <label for="asientos_obturador_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="asientos_obturador_utiliza" class="mr-2" name="u_repuesto_asientoobturador" @checked($valvula->u_repuesto_asientoobturador == 'Si') value="Si" >
                        <label for="asientos_obturador_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estasienobtu1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estasienobtu1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estasienobtu2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estasienobtu2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">SOPORTE CLAPETA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox"  class="mr-2" name="repuesto_soporteclapleta" @checked($valvula->repuesto_soporteclapleta == 'Si') value="Si" >
                        <label for="soporte_clapeta_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="soporte_clapeta_utiliza" class="mr-2" name="u_repuesto_soporteclapeta" @checked($valvula->u_repuesto_soporteclapeta == 'Si') value="Si" >
                        <label for="soporte_clapeta_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estsopor1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estsopor1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estsopor2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estsopor2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">HUSILLO / EJE (SV's)</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="mr-2" name="repuesto_husillo" @checked($valvula->repuesto_husillo == 'Si') value="Si" >
                        <label for="husillo_eje_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="husillo_eje_utiliza" class="mr-2" name="u_repuesto_husillo" @checked($valvula->u_repuesto_husillo == 'Si') value="Si" >
                        <label for="husillo_eje_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="esthusillo1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->esthusillo1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="esthusillo2">
                         <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->esthusillo2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">TUERCA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="tuerca_solicita" class="mr-2" name="repuesto_tuerca" @checked($valvula->repuesto_tuerca == 'Si') value="Si" >
                        <label for="tuerca_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="tuerca_utiliza" class="mr-2" name="u_repuesto_tuerca" @checked($valvula->u_repuesto_tuerca == 'Si') value="Si" >
                        <label for="tuerca_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="esttuerca1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->esttuerca1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="esttuerca2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->esttuerca2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">PUENTE</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="puente_solicita" class="mr-2" name="repuesto_puente" @checked($valvula->repuesto_puente == 'Si') value="Si" >
                        <label for="puente_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="puente_utiliza" class="mr-2" name="u_repuesto_puente" @checked($valvula->u_repuesto_puente == 'Si') value="Si" >
                        <label for="puente_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estpuente1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estpuente1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estpuente2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estpuente2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">REDUCTORA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="reductora_solicita" class="mr-2" name="repuesto_reductora" @checked($valvula->repuesto_reductora == 'Si') value="Si" >
                        <label for="reductora_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="reductora_utiliza" class="mr-2" name="u_repuesto_reductora" @checked($valvula->u_repuesto_reductora == 'Si') value="Si" >
                        <label for="reductora_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estreduc1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estreduc1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estreduc2">
                         <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estreduc2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">JUNTA CUERPO</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="junta_cuerpo_solicita" class="mr-2" name="repuesto_juntacuerpo" @checked($valvula->repuesto_juntacuerpo == 'Si') value="Si" >
                        <label for="junta_cuerpo_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="junta_cuerpo_utiliza" class="mr-2" name="u_repuesto_juntacuerpo" @checked($valvula->u_repuesto_juntacuerpo == 'Si') value="Si" >
                        <label for="junta_cuerpo_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estjuntacuerp1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estjuntacuerp1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estjuntacuerp2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estjuntacuerp2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">ESPARRAGOS</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="esparragos_solicita" class="mr-2" name="repuesto_esparragos" @checked($valvula->repuesto_esparragos == 'Si') value="Si" >
                        <label for="esparragos_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="esparragos_utiliza" class="mr-2" name="u_repuesto_esparragos" @checked($valvula->u_repuesto_esparragos == 'Si') value="Si" >
                        <label for="esparragos_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estesparr1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estesparr1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estesparr2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estesparr2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">BACK SEAT</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="back_seat_solicita" class="mr-2" name="repuesto_backseat" @checked($valvula->repuesto_backseat == 'Si') value="Si" >
                        <label for="back_seat_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="back_seat_utiliza" class="mr-2" name="u_repuesto_backseat" @checked($valvula->u_repuesto_backseat == 'Si') value="Si" >
                        <label for="back_seat_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estbackseat1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estbackseat1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estbackseat2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estbackseat2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">RESORTE</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="resorte_solicita" class="mr-2" name="repuesto_resorte" @checked($valvula->repuesto_resorte == 'Si') value="Si" >
                        <label for="resorte_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="resorte_utiliza" class="mr-2" name="u_repuesto_resorte" @checked($valvula->u_repuesto_resorte == 'Si') value="Si" >
                        <label for="resorte_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estresorte1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estresorte1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estresorte2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estresorte2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">EMPAQUETADURA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="empaquetadura_solicita" class="mr-2" name="repuesto_empaquetadura" @checked($valvula->repuesto_empaquetadura == 'Si') value="Si" >
                        <label for="empaquetadura_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="empaquetadura_utiliza" class="mr-2" name="u_repuesto_empaquetadura" @checked($valvula->u_repuesto_empaquetadura == 'Si') value="Si" >
                        <label for="empaquetadura_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estempaque1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estempaque1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estempaque2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estempaque2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">LINTERNA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="linterna_solicita" class="mr-2" name="repuesto_linterna" @checked($valvula->repuesto_linterna == 'Si') value="Si" >
                        <label for="linterna_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="linterna_utiliza" class="mr-2" name="u_repuesto_linterna" @checked($valvula->u_repuesto_linterna == 'Si') value="Si" >
                        <label for="linterna_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estlinter1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estlinter1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estlinter2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estlinter2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">PRENSA</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="prensa_solicita" class="mr-2" name="repuesto_prensa" @checked($valvula->repuesto_prensa == 'Si') value="Si" >
                        <label for="prensa_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="prensa_utiliza" class="mr-2" name="u_repuesto_prensa" @checked($valvula->u_repuesto_prensa == 'Si') value="Si" >
                        <label for="prensa_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estprensa1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estprensa1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estprensa2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estprensa2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">VOLANTE</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="volante_solicita" class="mr-2" name="repuesto_volante" @checked($valvula->repuesto_volante == 'Si') value="Si" >
                        <label for="volante_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="volante_utiliza" class="mr-2" name="u_repuesto_volante" @checked($valvula->u_repuesto_volante == 'Si') value="Si" >
                        <label for="volante_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estvolant1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estvolant1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estvolant2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estvolant2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">FUELLE</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="fuelle_solicita" class="mr-2" name="repuesto_fuelle" @checked($valvula->repuesto_fuelle == 'Si') value="Si" >
                        <label for="fuelle_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="fuelle_utiliza" class="mr-2" name="u_repuesto_fuelle" @checked($valvula->u_repuesto_fuelle == 'Si') value="Si" >
                        <label for="fuelle_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estfuelle1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estfuelle1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estfuelle2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estfuelle2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="p-2">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold">GUÍAS</span>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="guias_solicita" class="mr-2" name="repuesto_guias" @checked($valvula->repuesto_guias == 'Si') value="Si" >
                        <label for="guias_solicita">¿SOLICITA REPUESTO?</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="guias_utiliza" class="mr-2" name="u_repuesto_guias" @checked($valvula->u_repuesto_guias == 'Si') value="Si" >
                        <label for="guias_utiliza">¿UTILIZA REPUESTO?</label>
                    </div>
                </td>
                <td class="p-2">
                    <select class="w-full border p-1 rounded" name="estguias1">
                        <option value="">Selecciona</option>
                            @foreach ($solicita_repuesto as $key => $value)
                                <option value="{{ $key }}" @selected($value == $valvula->estguias1)>{{ $value }}</option>
                            @endforeach
                    </select>
                </td>
                <td class="p-2">
                   <select class="w-full border p-1 rounded" name="estguias2">
                        <option value="">Selecciona</option>
                        @foreach ($trabajo_realizado as $key => $value)
                            <option value="{{ $key }}" @selected($value == $valvula->estguias2)>{{ $value }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
      
          </tbody>
        </table>
    </div>
</div>