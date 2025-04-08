@extends('admin.layout')
@section('content') 


<div class="w-full">
  @if (session('success'))
    <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Éxito:</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
        <button onclick="document.getElementById('successMessage').remove();" class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 00-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z"/>
            </svg>
        </button>
    </div>

    <script>
        setTimeout(() => {
            document.getElementById('successMessage')?.remove();
        }, 3000);
    </script>
  @endif
  <form action="" method="get" id="filterForm">
    <div class="mb-4">
      <div class="md:flex items-center gap-2">
        <div>
          <label for="zona_select" class="text-white">GESTIÓN DE PURGADORES</label>
          <select name="zona_select" onchange="document.getElementById('filterForm').submit();" id="" class="w-full md:w-auto rounded-lg text-white flex items-center cursor-pointer px-4 py-2 border-gray-200 dark:border-[#2B2B30] bg-white dark:bg-[#1F1F23]">
            <option value="">Listado de Purgadores General</option>
            <option value="ZONA 1 - CX">ZONA 1 - CX - CICLOHEXANO (174)</option>
            <option value="ZONA 1 - HD">ZONA 1 - HD - HEXANODIOL (612)</option>
            <option value="ZONA 2 - LC">ZONA 2 - LC - LACTAMA (153)</option>
            <option value="ZONA 2 - MQ">ZONA 2 - MQ - MAQUINAS (16)</option>
            <option value="ZONA 2 - SA">ZONA 2 - SA - SULFATO AMÓNICO (62)</option>
            <option value="ZONA 3 - HX">ZONA 3 - HX - HIDROXILAMINA (9)</option>
            <option value="ZONA 3 - WL">ZONA 3 - WL - WASTELIQUOR (80)</option>
            <option value="ZONA 3 - SO2">ZONA 3 - SO2 - COMBUSTIÓN AZUFRE (223)</option>
            <option value="ZONA 3 - AG">ZONA 3 - AG - COGENERACIÓN (88)</option>
            <option value="ZONA 3 - TK">ZONA 3 - TK - TANQUES (23)</option>
            <option value="ZONA 5 - NY - I/S">ZONA 5 - NY - I/S - OLIVE I/S (149)</option>
            <option value="ZONA 5 - NY - II">ZONA 5 - NY - II - OLIVE II (33)</option>
          </select>
        </div>

        <div>
          <label for="fabricante_select" class="text-white">Seleccione Fabricante</label>
          <select name="fabricante_select" onchange="document.getElementById('filterForm').submit();" id="" class="w-full md:w-auto rounded-lg text-white flex items-center cursor-pointer px-4 py-2 border-gray-200 dark:border-[#2B2B30] bg-white dark:bg-[#1F1F23]">
            <option value="">Mostrar todos</option>
            <option value="">Bestobell</option>
            <option value="">Ari</option>
            <option value="">Spirax</option>

          </select>
        </div>


      </div>
    </div>
    <div class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <div class="">

        <div class="relative w-full sm:w-64 flex items-center gap-0" >
          <div>
            <i data-lucide="search" class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-500 dark:text-gray-400"></i>
            <input type="search" value="{{ $search }}" name="search" placeholder="SV-XXXX-ZZZ" class="pl-9 bg-gray-500 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] h-9 text-sm text-gray-400">
          </div>
          <button type="submit" class="rounded-lg bg-red-600 text-white cursor-pointer" style="padding: 0.4em;border-radius: 0 10px 10px 0;">Buscar</button>
        </div>
      </div>
      <div class="md:flex items-center gap-2">
        <button class="rounded-lg text-white flex items-center cursor-pointer px-4 w-full mb-3 py-2 border-gray-200 dark:border-[#2B2B30] bg-white dark:bg-[#1F1F23]">
          <i data-lucide="funnel" class="h-4 w-4 mr-3 flex-shrink-0"></i> Filtros
        </button>
        <button class="rounded-lg text-white flex items-center cursor-pointer px-4 w-full mb-3 py-2 border-gray-200 dark:border-[#2B2B30] bg-white dark:bg-[#1F1F23]">
          <i data-lucide="download" class="h-4 w-4 mr-2"></i> Exportar
        </button>

        <a href="{{ route('purgadores.create') }}" class="bg-blue-600 text-white mb-3 rounded-lg px-4 py-2 flex items-center">
          <i data-lucide="circle-plus" class="h-4 w-4 mr-2"></i>Agregar
        </a>
      </div>
    </div>
  </form> 

  @if (!$purgadores->count())
    <div class="text-white text-6xl text-center mt-8">No hay resultados.</div>
  @else
  
    <div class="rounded-xl border border-gray-200 dark:border-[#1F1F23] overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="bg-gray-50 dark:bg-[#1F1F23] border-b border-gray-200 dark:border-[#2B2B30]">
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Estado</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Tag</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Fabricante</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Detalle de Ubicacion</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Tipo de Producto</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Actualización</th>

              <th class="px-4 py-3 text-right font-medium text-gray-500 dark:text-gray-400">Acción</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-[#2B2B30] bg-white dark:bg-[#0F0F12]">
            @foreach ($purgadores as $purgador)
            <tr class="hover:bg-gray-50 dark:hover:bg-[#1F1F23]/50 transition-colors duration-150">
              <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $purgador->fecha_audita22 }}</td>
              <td class="px-4 py-3 text-yellow-900 dark:text-yellow-100">
                <a href="{{ route('purgadores.show', ['id'=>$purgador->id]) }}">{{ $purgador->TAG_Nuevo }}</a>
              </td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $purgador->Fabricante }}</td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $purgador->Detalle_de_Ubicacion }}</td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $purgador->Tipo_de_Producto }}</td>
              <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $purgador->created }}</td>
              <td class="px-4 py-3 text-right relative" x-data="{ open: false }">
                <!-- Botón para abrir el dropdown -->
                <button @click="open = !open" class="h-8 w-8 p-0 text-gray-500 hover:bg-gray-100 dark:hover:bg-[#1F1F23] rounded cursor-pointer">
                  ⋮
                </button>
        
                <!-- Dropdown -->
                <div x-show="open" @click.away="open = false"
                  class="absolute right-0 mt-2 w-36 bg-white dark:bg-[#1F1F23] border border-gray-200 dark:border-[#2B2B30] rounded-lg shadow-md z-10" style="top: -26px;">
                  <a href="{{ route('onworikingview', $purgador->id) }}" 
                     class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-[#2B2B30]">
                    Editar
                  </a>
                  <form action="{{ route('purgadores.destroy', $purgador->id) }}" method="POST" 
                        onsubmit="return confirm('¿Seguro que quieres eliminar esta purgador?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full text-right px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-red-100 dark:hover:bg-red-900/30 cursor-pointer">
                      Eliminar
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <div class="bg-white dark:bg-[#0F0F12] px-4 py-3 border-t border-gray-200 dark:border-[#2B2B30] text-sm text-gray-500 dark:text-gray-400">
        {{ $purgadores->links() }}
        {{-- <span class="text-gray-700 dark:text-gray-400">Showing {{ $purgadores->firstItem() }} to {{ $purgadores->lastItem() }} of {{ $purgadores->total() }} entries</span> --}}
      </div>
    </div>
  @endif
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</div>



@endsection
@section('title', 'purgadores')