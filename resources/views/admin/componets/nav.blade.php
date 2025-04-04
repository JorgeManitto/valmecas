<header class="header bg-white dark:bg-[#0F0F12]">
  <nav class="px-3 sm:px-6 flex items-center justify-between h-full">
    <div class="font-medium text-sm hidden sm:flex items-center space-x-1 truncate max-w-[300px]">
      <div class="flex items-center">
        <span class="text-gray-900 dark:text-gray-100">Valmecas</span>
      </div>
      <div class="flex items-center">
        <i data-lucide="chevron-right" class="h-4 w-4 text-gray-500 dark:text-gray-400 mx-1"></i>
        <span class="text-gray-900 dark:text-gray-100 text-sm font-medium truncate capitalize">
          {{ str_replace('.',' ', request()->route()->getName()) }}
        </span>
      </div>
    </div>

    <!-- Mobile menu button -->
    <button type="button" class="lg:hidden p-2 rounded-lg" id="mobile-menu-button">
      <i data-lucide="menu" class="h-5 w-5 text-gray-600 dark:text-gray-300"></i>
    </button>

    <div class="flex items-center gap-2 sm:gap-4 ml-auto sm:ml-0">

      <button id="theme-toggle" class="p-2 hover:bg-gray-100 dark:hover:bg-[#1F1F23] rounded-full transition-colors">
        <i data-lucide="sun" class="h-5 w-5 text-gray-600 dark:text-gray-300 block dark:hidden"></i>
        <i data-lucide="moon" class="h-5 w-5 text-gray-600 dark:text-gray-300 hidden dark:block"></i>
      </button>

      <div class="relative" id="profile-dropdown">
        <button class="focus:outline-none">
          <img src="https://ferf1mheo22r9ira.public.blob.vercel-storage.com/avatar-01-n0x8HFv8EUetf9z6ht0wScJKoTHqf8.png" alt="User avatar" width="28" height="28" class="rounded-full ring-2 ring-gray-200 dark:ring-[#2B2B30] sm:w-8 sm:h-8 cursor-pointer">
        </button>
        <div id="profile-dropdown-content" class="hidden absolute right-0 mt-2 w-80 bg-white dark:bg-[#0F0F12] border border-gray-200 dark:border-[#1F1F23] rounded-lg shadow-lg z-50">
          <div class="relative overflow-hidden rounded-2xl border border-zinc-200 dark:border-zinc-800">
            <div class="relative px-6 pt-12 pb-6">
              <div class="flex items-center gap-4 mb-8">
                <div class="relative shrink-0">
                  <img src="https://ferf1mheo22r9ira.public.blob.vercel-storage.com/avatar-01-n0x8HFv8EUetf9z6ht0wScJKoTHqf8.png" alt="Eugene An" width="72" height="72" class="rounded-full ring-4 ring-white dark:ring-zinc-900 object-cover">
                  <div class="absolute bottom-0 right-0 w-4 h-4 rounded-full bg-emerald-500 ring-2 ring-white dark:ring-zinc-900"></div>
                </div>
                <div class="flex-1">
                  <h2 class="text-xl font-semibold text-zinc-900 dark:text-zinc-100">{{ auth()->user()->name}}</h2>
                  <p class="text-zinc-600 dark:text-zinc-400">Prompt Engineer</p>
                </div>
              </div>
              <div class="h-px bg-zinc-200 dark:bg-zinc-800 my-6"></div>
              <div class="space-y-2">
                
                <a href="#" class="flex items-center justify-between p-2 hover:bg-zinc-50 dark:hover:bg-zinc-800/50 rounded-lg transition-colors duration-200">
                  <div class="flex items-center gap-2">
                    <i data-lucide="settings" class="w-4 h-4"></i>
                    <span class="text-sm font-medium text-zinc-900 dark:text-zinc-100">Settings</span>
                  </div>
                </a>

                <button type="button" class="w-full flex items-center justify-between p-2 hover:bg-zinc-50 dark:hover:bg-zinc-800/50 rounded-lg transition-colors duration-200">
                  <div class="flex items-center gap-2">
                    <i data-lucide="log-out" class="w-4 h-4"></i>
                    <span class="text-sm font-medium text-zinc-900 dark:text-zinc-100">Logout</span>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>