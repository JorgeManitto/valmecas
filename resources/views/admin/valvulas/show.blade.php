@extends('admin.layout')
@section('content') 

<div class="max-w-4xl mx-auto p-6 rounded-lg shadow-lg bg-white">
  <div class="grid md:grid-cols-3 gap-4 border-b pb-4 mb-4 items-center">
      <div>
          <h1 class="font-bold text-center">CASTELLÓN VÁLVULAS Y MECANIZADOS S.L.</h1>
      </div>
      <div class="md:text-center font-bold">F-023<br>FICHA TÉCNICA DE CONTROL Y DIAGNOSIS DE VÁLVULAS</div>
      <div class="md:text-right font-bold">
        @php
            $imagen = str_replace('/homepages/32/d467861861/htdocs/www2/','https://valmecas.es/',$valvula->file_imagen1) ;
        @endphp
        @if ($imagen)
            <img src="{{$imagen}}" alt="Imagen" class="w-32 h-32 object-cover rounded-lg mx-auto">
        @endif
      </div>
  </div>
  
  <div class="grid grid-cols-2 gap-4">
      <label class="block">Oferta: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="oferta" value="{{$valvula->oferta}}"></label>
      <div class="flex gap-4 items-end">
        <label class="block">Cliente: 
          <select class="w-full bg-gray-200 p-2 rounded" name="cliente">
            <option>Selecciona</option>
            @foreach ($empresas as $empresa)
            <option value="{{ $empresa->nombre }}" @selected($empresa->nombre == $valvula->cliente)>{{ $empresa->nombre }}</option>
            @endforeach
          </select>
        </label>
        <a class="bg-blue-600 py-2 px-4 rounded-lg text-white" href="{{ route('clientes.valvulas.create') }}" target="_blank">Nuevo</a>
      </div>
      <div></div>
      
      <label class="block">Origen
        <select class="w-full bg-gray-200 p-2 rounded" name="origen">
          <option value="" @selected('' == $valvula->origen)>Selecciona</option>
          <option value="ESTATICO" @selected('ESTATICO' == $valvula->origen)>ESTATICO</option>
          <option value="INSTRUMENTACION" @selected('INSTRUMENTACION' == $valvula->origen)>INSTRUMENTACIÓN</option>
          <option value="ROTATIVO" @selected('ROTATIVO' == $valvula->origen)>ROTATIVO</option>
          <option value="NO APLICA" @selected('NO APLICA' == $valvula->origen)>NO APLICA</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-3 gap-4 mt-4">
      <label class="block">Motivo Intervención:
        <select class="w-full bg-gray-200 p-2 rounded">
          <option value="" @selected('' == $valvula->motivo_rep)>Selecciona</option>
          <option value="Nueva" @selected('Nueva' == $valvula->motivo_rep)>Nueva</option>
          <option value="Correctivo" @selected('Correctivo' == $valvula->motivo_rep)>Correctivo</option>
          <option value="Preventivo" @selected('Preventivo' == $valvula->motivo_rep)>Preventivo</option>
        </select>
      </label>
      <label class="block">Finalizado: <br>
          <input type="radio" name="finaliz" value="Si" @checked('Si' == $valvula->finaliz)> Sí
          <input type="radio" name="finaliz" value="No" @checked('No' == $valvula->finaliz)> No
      </label>
      <label class="block">W.O.: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="wo" value="{{$valvula->wo}}"></label>
  </div>

  <div class="grid grid-cols-3 gap-4 mt-4">
      <label class="block">Recepciona: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="recepciona" value="{{$valvula->recepciona}}"></label>
      <label class="block">
        Fecha Entrada: 
        <input 
          type="date" 
          class="w-full bg-gray-200 p-2 rounded" 
          name="fentra" 
          value="{{ \Carbon\Carbon::createFromFormat('d-m-Y', $valvula->fentra)->format('Y-m-d') }}">
      </label>
      <label class="block">Fecha Salida: 
        <input 
          type="date" 
          class="w-full bg-gray-200 p-2 rounded" 
          name="fsalida" 
          value="{{ \Carbon\Carbon::createFromFormat('d-m-Y', $valvula->fsalida)->format('Y-m-d') }}">
      </label>      
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Sector de Procedencia: <input type="text" class="w-full bg-gray-200 p-2 rounded" name="sector" value="{{$valvula->sector}}"></label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">TAG: <input type="text" placeholder="Ej: SV-XXXX-ZZZ" class="w-full bg-gray-200 p-2 rounded" name="tag_item" value="{{$valvula->tag_item}}"></label>
      <label class="block">MARCA: <input type="text" placeholder="" class="w-full bg-gray-200 p-2 rounded" name="modelo" value="{{$valvula->modelo}}"></label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Tipo: 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipo">
          <option>Selecciona</option>
          <option value="GLOBO" @selected('GLOBO' == $valvula->tipo)>GLOBO</option>
          <option value="BOLA" @selected('BOLA' == $valvula->tipo)>BOLA</option>
          <option value="SEGURIDAD" @selected('SEGURIDAD' == $valvula->tipo)>SEGURIDAD</option>
          <option value="COMPUERTA" @selected('COMPUERTA' == $valvula->tipo)>COMPUERTA</option>
          <option value="MACHO" @selected('MACHO' == $valvula->tipo)>MACHO</option>
          <option value="VACIO" @selected('VACIO' == $valvula->tipo)>VACIO</option>
          <option value="MARIPOSA" @selected('MARIPOSA' == $valvula->tipo)>MARIPOSA</option>
          <option value="RETENCION" @selected('RETENCION' == $valvula->tipo)>RETENCION</option>
          <option value="OTROS" @selected('OTROS' == $valvula->tipo)>OTROS</option>
        </select>
      </label>
      <label class="block">Accionamiento: 
        <select class="w-full bg-gray-200 p-2 rounded" name="accionamiento">
          <option>Selecciona</option>
          <option value="MANUAL" @selected('MANUAL' == $valvula->accionamiento)>MANUAL</option>
          <option value="AUTOMATICO" @selected('AUTOMATICO' == $valvula->accionamiento)>AUTOMATICO</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Diámetro: 
        <select class="w-full bg-gray-200 p-2 rounded" name="diametro">
          <option value="">Selecciona</option>
          <option value='1/4"' @selected($valvula->diametro == '1/4"')>1/4"</option>
          <option value='1/2"' @selected($valvula->diametro == '1/2"')>1/2"</option>
          <option value='3/4"' @selected($valvula->diametro == '3/4"')>3/4"</option>
          <option value='1"' @selected($valvula->diametro == '1"')>1"</option>
          <option value='1 1/2"' @selected($valvula->diametro == '1 1/2"')>1 1/2"</option>
          <option value='2"' @selected($valvula->diametro == '2"')>2"</option>
          <option value='2 1/2"' @selected($valvula->diametro == '2 1/2"')>2 1/2"</option>
          <option value='3"' @selected($valvula->diametro == '3"')>3"</option>
          <option value='4"' @selected($valvula->diametro == '4"')>4"</option>
          <option value='5"' @selected($valvula->diametro == '5"')>5"</option>
          <option value='6"' @selected($valvula->diametro == '6"')>6"</option>
          <option value='8"' @selected($valvula->diametro == '8"')>8"</option>
          <option value='10"' @selected($valvula->diametro == '10"')>10"</option>
          <option value='12"' @selected($valvula->diametro == '12"')>12"</option>
          <option value='14"' @selected($valvula->diametro == '14"')>14"</option>
          <option value='16"' @selected($valvula->diametro == '16"')>16"</option>
          <option value='18"' @selected($valvula->diametro == '18"')>18"</option>
          <option value='20"' @selected($valvula->diametro == '20"')>20"</option>
          <option value='22"' @selected($valvula->diametro == '22"')>22"</option>
          <option value='24"' @selected($valvula->diametro == '24"')>24"</option>
          <option value='26"' @selected($valvula->diametro == '26"')>26"</option>
          <option value="DN10" @selected($valvula->diametro == 'DN10')>DN10</option>
          <option value="DN15" @selected($valvula->diametro == 'DN15')>DN15</option>
          <option value="DN20" @selected($valvula->diametro == 'DN20')>DN20</option>
          <option value="DN25" @selected($valvula->diametro == 'DN25')>DN25</option>
          <option value="DN32" @selected($valvula->diametro == 'DN32')>DN32</option>
          <option value="DN40" @selected($valvula->diametro == 'DN40')>DN40</option>
          <option value="DN50" @selected($valvula->diametro == 'DN50')>DN50</option>
          <option value="DN65" @selected($valvula->diametro == 'DN65')>DN65</option>
          <option value="DN80" @selected($valvula->diametro == 'DN80')>DN80</option>
          <option value="DN100" @selected($valvula->diametro == 'DN100')>DN100</option>
          <option value="DN125" @selected($valvula->diametro == 'DN125')>DN125</option>
          <option value="DN150" @selected($valvula->diametro == 'DN150')>DN150</option>
          <option value="DN200" @selected($valvula->diametro == 'DN200')>DN200</option>
          <option value="DN250" @selected($valvula->diametro == 'DN250')>DN250</option>
          <option value="DN300" @selected($valvula->diametro == 'DN300')>DN300</option>
          <option value="DN350" @selected($valvula->diametro == 'DN350')>DN350</option>
          <option value="DN400" @selected($valvula->diametro == 'DN400')>DN400</option>
          <option value="DN450" @selected($valvula->diametro == 'DN450')>DN450</option>
          <option value="DN500" @selected($valvula->diametro == 'DN500')>DN500</option>
          <option value="3/8NPT" @selected($valvula->diametro == '3/8NPT')>3/8NPT</option>
          

        </select>
      </label>
      <label class="block">Junta Brida Entrada: 
        <select class="w-full bg-gray-200 p-2 rounded" name="juntabridaentrada">
          <option value="">Selecciona</option>
          <option value="GRAFITO" @selected($valvula->juntabridaentrada == 'GRAFITO')>GRAFITO</option>
          <option value="ESPIROGRAFITO" @selected($valvula->juntabridaentrada == 'ESPIROGRAFITO')>ESPIROGRAFITO</option>
          <option value="ESPIROTEFLON" @selected($valvula->juntabridaentrada == 'ESPIROTEFLON')>ESPIROTEFLON</option>
          <option value="RTJ" @selected($valvula->juntabridaentrada == 'RTJ')>RTJ</option>
          <option value="CARTON" @selected($valvula->juntabridaentrada == 'CARTON')>CARTON</option>
          <option value="METALICA" @selected($valvula->juntabridaentrada == 'METALICA')>METALICA</option>
          <option value="TEFLON" @selected($valvula->juntabridaentrada == 'TEFLON')>TEFLON</option>
          <option value="NO APLICA" @selected($valvula->juntabridaentrada == 'NO APLICA')>NO APLICA</option>
        </select>
      </label>
      <label class="block">RATING: 
        <select class="w-full bg-gray-200 p-2 rounded" name="juntabridaentrada">
          <option value="">Selecciona</option>
          <option value="No aplica" @selected($valvula->rating == 'No aplica')>No aplica</option>
          <option value="150#" @selected($valvula->rating == '150#')>150#</option>
          <option value="300#" @selected($valvula->rating == '300#')>300#</option>
          <option value="400#" @selected($valvula->rating == '400#')>400#</option>
          <option value="600#" @selected($valvula->rating == '600#')>600#</option>
          <option value="800#" @selected($valvula->rating == '800#')>800#</option>
          <option value="900#" @selected($valvula->rating == '900#')>900#</option>
          <option value="1500#" @selected($valvula->rating == '1500#')>1500#</option>
          <option value="2500#" @selected($valvula->rating == '2500#')>2500#</option>
          <option value="PN2.5" @selected($valvula->rating == 'PN2.5')>PN2.5</option>
          <option value="PN6" @selected($valvula->rating == 'PN6')>PN6</option>
          <option value="PN10" @selected($valvula->rating == 'PN10')>PN10</option>
          <option value="PN16" @selected($valvula->rating == 'PN16')>PN16</option>
          <option value="PN25" @selected($valvula->rating == 'PN25')>PN25</option>
          <option value="PN40" @selected($valvula->rating == 'PN40')>PN40</option>
          <option value="PN63" @selected($valvula->rating == 'PN63')>PN63</option>
          <option value="PN69" @selected($valvula->rating == 'PN69')>PN69</option>
          <option value="PN100" @selected($valvula->rating == 'PN100')>PN100</option>
          <option value="PN160" @selected($valvula->rating == 'PN160')>PN160</option>
          <option value="PN250" @selected($valvula->rating == 'PN250')>PN250</option>
        </select>
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">

      <label class="block">Diámetro Salida: 
        <select class="w-full bg-gray-200 p-2 rounded" name="diametro">
          <option value="">Selecciona</option>
          <option value='1/4"' @selected($valvula->diametrosalida == '1/4"')>1/4"</option>
          <option value='1/2"' @selected($valvula->diametrosalida == '1/2"')>1/2"</option>
          <option value='3/4"' @selected($valvula->diametrosalida == '3/4"')>3/4"</option>
          <option value='1"' @selected($valvula->diametrosalida == '1"')>1"</option>
          <option value='1 1/2"' @selected($valvula->diametrosalida == '1 1/2"')>1 1/2"</option>
          <option value='2"' @selected($valvula->diametrosalida == '2"')>2"</option>
          <option value='2 1/2"' @selected($valvula->diametrosalida == '2 1/2"')>2 1/2"</option>
          <option value='3"' @selected($valvula->diametrosalida == '3"')>3"</option>
          <option value='4"' @selected($valvula->diametrosalida == '4"')>4"</option>
          <option value='5"' @selected($valvula->diametrosalida == '5"')>5"</option>
          <option value='6"' @selected($valvula->diametrosalida == '6"')>6"</option>
          <option value='8"' @selected($valvula->diametrosalida == '8"')>8"</option>
          <option value='10"' @selected($valvula->diametrosalida == '10"')>10"</option>
          <option value='12"' @selected($valvula->diametrosalida == '12"')>12"</option>
          <option value='14"' @selected($valvula->diametrosalida == '14"')>14"</option>
          <option value='16"' @selected($valvula->diametrosalida == '16"')>16"</option>
          <option value='18"' @selected($valvula->diametrosalida == '18"')>18"</option>
          <option value='20"' @selected($valvula->diametrosalida == '20"')>20"</option>
          <option value='22"' @selected($valvula->diametrosalida == '22"')>22"</option>
          <option value='24"' @selected($valvula->diametrosalida == '24"')>24"</option>
          <option value='26"' @selected($valvula->diametrosalida == '26"')>26"</option>
          <option value="DN10" @selected($valvula->diametrosalida == 'DN10')>DN10</option>
          <option value="DN15" @selected($valvula->diametrosalida == 'DN15')>DN15</option>
          <option value="DN20" @selected($valvula->diametrosalida == 'DN20')>DN20</option>
          <option value="DN25" @selected($valvula->diametrosalida == 'DN25')>DN25</option>
          <option value="DN32" @selected($valvula->diametrosalida == 'DN32')>DN32</option>
          <option value="DN40" @selected($valvula->diametrosalida == 'DN40')>DN40</option>
          <option value="DN50" @selected($valvula->diametrosalida == 'DN50')>DN50</option>
          <option value="DN65" @selected($valvula->diametrosalida == 'DN65')>DN65</option>
          <option value="DN80" @selected($valvula->diametrosalida == 'DN80')>DN80</option>
          <option value="DN100" @selected($valvula->diametrosalida == 'DN100')>DN100</option>
          <option value="DN125" @selected($valvula->diametrosalida == 'DN125')>DN125</option>
          <option value="DN150" @selected($valvula->diametrosalida == 'DN150')>DN150</option>
          <option value="DN200" @selected($valvula->diametrosalida == 'DN200')>DN200</option>
          <option value="DN250" @selected($valvula->diametrosalida == 'DN250')>DN250</option>
          <option value="DN300" @selected($valvula->diametrosalida == 'DN300')>DN300</option>
          <option value="DN350" @selected($valvula->diametrosalida == 'DN350')>DN350</option>
          <option value="DN400" @selected($valvula->diametrosalida == 'DN400')>DN400</option>
          <option value="DN450" @selected($valvula->diametrosalida == 'DN450')>DN450</option>
          <option value="DN500" @selected($valvula->diametrosalida == 'DN500')>DN500</option>
          <option value="3/8NPT" @selected($valvula->diametrosalida == '3/8NPT')>3/8NPT</option>
          

        </select>
      </label>
      <label class="block">Junta Brida Salida: 
        <select class="w-full bg-gray-200 p-2 rounded" name="juntabridasalida">
          <option value="">Selecciona</option>
          <option value="GRAFITO" @selected($valvula->juntabridasalida == 'GRAFITO')>GRAFITO</option>
          <option value="ESPIROGRAFITO" @selected($valvula->juntabridasalida == 'ESPIROGRAFITO')>ESPIROGRAFITO</option>
          <option value="ESPIROTEFLON" @selected($valvula->juntabridasalida == 'ESPIROTEFLON')>ESPIROTEFLON</option>
          <option value="RTJ" @selected($valvula->juntabridasalida == 'RTJ')>RTJ</option>
          <option value="CARTON" @selected($valvula->juntabridasalida == 'CARTON')>CARTON</option>
          <option value="METALICA" @selected($valvula->juntabridasalida == 'METALICA')>METALICA</option>
          <option value="TEFLON" @selected($valvula->juntabridasalida == 'TEFLON')>TEFLON</option>
          <option value="NO APLICA" @selected($valvula->juntabridasalida == 'NO APLICA')>NO APLICA</option>
        </select>
      </label>
      <label class="block">RATING DE SALIDA: 
        <select class="w-full bg-gray-200 p-2 rounded" name="juntabridaentrada">
          <option value="">Selecciona</option>
          <option value="No aplica" @selected($valvula->ratingsalida == 'No aplica')>No aplica</option>
          <option value="150#" @selected($valvula->ratingsalida == '150#')>150#</option>
          <option value="300#" @selected($valvula->ratingsalida == '300#')>300#</option>
          <option value="400#" @selected($valvula->ratingsalida == '400#')>400#</option>
          <option value="600#" @selected($valvula->ratingsalida == '600#')>600#</option>
          <option value="800#" @selected($valvula->ratingsalida == '800#')>800#</option>
          <option value="900#" @selected($valvula->ratingsalida == '900#')>900#</option>
          <option value="1500#" @selected($valvula->ratingsalida == '1500#')>1500#</option>
          <option value="2500#" @selected($valvula->ratingsalida == '2500#')>2500#</option>
          <option value="PN2.5" @selected($valvula->ratingsalida == 'PN2.5')>PN2.5</option>
          <option value="PN6" @selected($valvula->ratingsalida == 'PN6')>PN6</option>
          <option value="PN10" @selected($valvula->ratingsalida == 'PN10')>PN10</option>
          <option value="PN16" @selected($valvula->ratingsalida == 'PN16')>PN16</option>
          <option value="PN25" @selected($valvula->ratingsalida == 'PN25')>PN25</option>
          <option value="PN40" @selected($valvula->ratingsalida == 'PN40')>PN40</option>
          <option value="PN63" @selected($valvula->ratingsalida == 'PN63')>PN63</option>
          <option value="PN69" @selected($valvula->ratingsalida == 'PN69')>PN69</option>
          <option value="PN100" @selected($valvula->ratingsalida == 'PN100')>PN100</option>
          <option value="PN160" @selected($valvula->ratingsalida == 'PN160')>PN160</option>
          <option value="PN250" @selected($valvula->ratingsalida == 'PN250')>PN250</option>
        </select>
      </label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material Cuerpo: 
        {{--  --}}
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="material_cuerpo" value="{{$valvula->material_cuerpo}}">
      </label>
      <label class="block">Material Bonete:
        {{--  --}}
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="material_bonete" value="{{$valvula->material_bonete}}">
      </label>
  </div>

  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material de Asiento: 
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="materialasiento" value="{{$valvula->materialasiento}}">
      </label>
      <label class="block">Tipo de Unión a Tubería: 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipounion">
          <option>Selecciona</option>
          <option value="EMBRIDADA" @selected("EMBRIDADA" == $valvula->tipounion)>EMBRIDADA</option>
          <option value="ROSCADA" @selected("ROSCADA" == $valvula->tipounion)>ROSCADA</option>
          <option value="WAFER" @selected("WAFER" == $valvula->tipounion)>WAFER</option>
          <option value="SOLDADA" @selected("SOLDADA" == $valvula->tipounion)>SOLDADA</option>
        </select>
      </label>
  </div>
  
  <div class="grid grid-cols-2 gap-4 mt-4">
      <label class="block">Material de Cierre: 
        <input type="text" class="w-full bg-gray-200 p-2 rounded" name="materialcierre" value="{{$valvula->materialcierre}}">
      </label>
      <label class="block">Tipo de Cierre (Simple/Doble): 
        <select class="w-full bg-gray-200 p-2 rounded" name="tipocierre">
          <option>Selecciona</option>
          <option @selected('SIMPLE' == $valvula->tipocierre) value="SIMPLE">SIMPLE</option>
          <option @selected('DOBLE' == $valvula->tipocierre) value="DOBLE">DOBLE</option>
          <option @selected('TRIPLE' == $valvula->tipocierre) value="TRIPLE">TRIPLE</option>
        </select>
      </label>
  </div>
</div>

@include('admin.valvulas.componets.tabla-estado-trabajo')
@include('admin.valvulas.componets.cliente-solicitud')
@include('admin.valvulas.componets.form-4')
@include('admin.valvulas.componets.form-5')
@include('admin.valvulas.componets.form-6')
@include('admin.valvulas.componets.form-7')
@include('admin.valvulas.componets.form-8')
@include('admin.valvulas.componets.form-9')
@include('admin.valvulas.componets.form-10')
@include('admin.valvulas.componets.form-11')
@include('admin.valvulas.componets.form-12')
@include('admin.valvulas.componets.form-13')
@include('admin.valvulas.componets.form-14')

<div class="sticky bottom-0 flex justify-end">

  <button class="bg-green-700 text-white font-semibold rounded-lg p-2">Guardar</button>
</div>

@endsection

 