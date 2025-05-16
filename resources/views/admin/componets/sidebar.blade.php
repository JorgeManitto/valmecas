    <!-- Sidebar -->
    <nav class="sidebar bg-[#FFF] dark:bg-[#0F0F12]" id="sidebar">
      <div class="h-full flex flex-col">
        <a href="#" target="_blank" rel="noopener noreferrer" class="h-16 px-6 hidden dark:flex items-center border-b border-gray-200 dark:border-[#1F1F23] dark:bg-[#0F0F12]">
          <div class="flex items-center gap-3">
            <img src="{{ asset('logoweb2.png') }}" alt="logo Valmecas" class="flex-shrink-0" style="height: 90px;padding: 1em; ">
          </div>
        </a>
        <a href="#" target="_blank" rel="noopener noreferrer" class="h-16 px-6 flex items-center border-b border-gray-200 dark:border-[#1F1F23] dark:bg-[#0F0F12] dark:hidden ">
          <div class="flex items-center gap-3">
            <img src="{{ asset('logoweb2-old.png') }}" alt="logo Valmecas" class="flex-shrink-0" style="height: 90px;padding: 1em; ">
          </div>
        </a>

        <div class="flex-1 overflow-y-auto py-4 px-4">
          <div class="space-y-6">
            <div>
              <div class="flex items-center  px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                
                General
              </div>
              <div class="space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]">
                  <i data-lucide="home" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                  Escritorio
                </a>
              </div>
            </div>

            {{-- <div>
              <div class="px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 flex items-center">
                <i data-lucide="folder" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                  Archivos
              </div>
              <div class="space-y-1">
                <a href="{{ route('archivos') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('archivos'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Listado De Archivos
                </a>

              </div>
            </div> --}}
            {{-- <div>
              <div class="px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 flex items-center">
                <i data-lucide="shopping-cart" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                  Pedidos
              </div>
              <div class="space-y-1">
                <a href="{{ route('pedidos') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('pedidos'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Base De Datos Pedidos
                </a>

              </div>
            </div> --}}

            <div>
              <div class="px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 flex items-center">
                <i data-lucide="chart-candlestick" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                Válvulas
              </div>
              <div class="space-y-1">
                <a href="{{ route('valvulas') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('valvulas'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Listado De Válvulas
                </a>

              </div>
              <div class="space-y-1">
                <a href="{{ route('clientes.valvulas') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('clientes.valvulas'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Listado De Clientes
                </a>

              </div>
              {{-- <div class="space-y-1">
                <a href="{{ route('marcas.valvulas') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('marcas.valvulas'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Listado De Marcas
                </a>

              </div> --}}
            </div>

            {{-- <div>
              <div class="px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 flex items-center">
                <i data-lucide="align-vertical-distribute-end" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                Purgadores
              </div>
              <div class="space-y-1">
                <a href="{{ route('purgadores') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('purgadores'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Listado De Purgadores
                </a>

              </div>
              <div class="space-y-1">
                <a href="{{ route('onworikingview') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]"
                @if (request()->routeIs('purgadores'))
                  style="background-color: #E5E7EB; color: #111827;"
                @endif
                >
                Informe De Auditoría 
                </a>

              </div>
            </div> --}}

            <div>
              <div class="px-3 mb-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                Equipo
              </div>
              <div class="space-y-1">
                <a href="{{ route('usuarios') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]">
                  <i data-lucide="users-2" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                  Miembros
                </a>
                <a href="{{ route('onworikingview') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]">
                  <i data-lucide="shield" class="h-4 w-4 mr-3 flex-shrink-0"></i>
                  Permisos
                </a>

              </div>
            </div>
          </div>
        </div>

        <div class="px-4 py-4 border-t border-gray-200 dark:border-[#1F1F23]">
          <div class="space-y-1">
            <a href="{{ route('onworikingview') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]">
              <i data-lucide="settings" class="h-4 w-4 mr-3 flex-shrink-0"></i>
              Settings
            </a>
            <a href="{{ route('onworikingview') }}" class="flex items-center px-3 py-2 text-sm rounded-md transition-colors text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1F1F23]">
              <i data-lucide="help-circle" class="h-4 w-4 mr-3 flex-shrink-0"></i>
              Help
            </a>
          </div>
        </div>
      </div>
    </nav>