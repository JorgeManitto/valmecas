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

    <div class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <div class="">

        <div class="relative w-full sm:w-64 flex items-center gap-0" >
          <div>
            <i data-lucide="search" class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-500 dark:text-gray-400"></i>
            <input type="search" value="{{ $search }}" name="search" placeholder="Cliente" class="pl-9 bg-gray-200 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] h-9 text-sm text-gray-400">
          </div>
          <button type="submit" class="rounded-lg bg-red-600 text-white cursor-pointer" style="padding: 0.4em;border-radius: 0 10px 10px 0;">Buscar</button>
        </div>
      </div>
      <div class="flex items-center gap-2">

        <a href="{{ route('clientes.valvulas.create') }}" class="bg-blue-600 text-white rounded-lg px-4 py-2 flex items-center">
          <i data-lucide="circle-plus" class="h-4 w-4 mr-2"></i>Agregar
        </a>
      </div>
    </div>
  </form> 

  @if (!$clientes->count())
    <div class="text-white text-6xl text-center mt-8">No hay resultados.</div>
  @else
  
    <div class="rounded-xl border border-gray-200 dark:border-[#1F1F23] overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-sm">
          <thead>
            <tr class="bg-gray-50 dark:bg-[#1F1F23] border-b border-gray-200 dark:border-[#2B2B30]">
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Nombre</th>
              <th class="px-4 py-3 text-left font-medium text-gray-500 dark:text-gray-400">Estado</th>
              <th class="px-4 py-3 text-right font-medium text-gray-500 dark:text-gray-400">Acción</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-[#2B2B30] bg-white dark:bg-[#0F0F12]">
            @foreach ($clientes as $valvula)
            <tr class="hover:bg-gray-50 dark:hover:bg-[#1F1F23]/50 transition-colors duration-150">
              <td class="px-4 py-3 text-yellow-900 dark:text-yellow-100">{{ $valvula->nombre }}</td>
              <td class="px-4 py-3">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                  {{ $valvula->estado === 'activo' ? 'bg-emerald-100 text-emerald-700 dark:bg-emerald-900/30 dark:text-emerald-400' : 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-400' }}">
                  {{ $valvula->estado }}
                </span>
              </td>
        
              <td class="px-4 py-3 text-right relative" x-data="{ open: false }">
                <!-- Botón para abrir el dropdown -->
                <button @click="open = !open" class="h-8 w-8 p-0 text-gray-500 hover:bg-gray-100 dark:hover:bg-[#1F1F23] rounded cursor-pointer">
                  ⋮
                </button>
        
                <!-- Dropdown -->
                <div x-show="open" @click.away="open = false"
                  class="absolute right-0 mt-2 w-36 bg-white dark:bg-[#1F1F23] border border-gray-200 dark:border-[#2B2B30] rounded-lg shadow-md z-10">
                  <a href="{{ route('clientes.valvulas.edit', $valvula->id) }}" 
                     class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-[#2B2B30]">
                    Editar
                  </a>
                  <form action="{{ route('clientes.valvulas.destroy', $valvula->id) }}" method="POST" 
                        onsubmit="return confirm('¿Seguro que quieres eliminar este cliente?');">
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
        {{ $clientes->links() }}
      </div>
    </div>
  @endif

</div>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


@endsection
@section('title', 'clientes')