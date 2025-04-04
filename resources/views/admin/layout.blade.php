<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valmecas Dashboard</title>
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.min.js"></script>
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
@else    @endif

  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    
    .dark {
      color-scheme: dark;
    }
    
    .dark body {
      background-color: #0F0F12;
      color: #fff;
    }
    
    /* Custom scrollbar */
    .scrollbar-none::-webkit-scrollbar {
      display: none;
    }
    
    .scrollbar-none {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }
    
    /* Progress bar animation */
    @keyframes progress {
      0% { width: 0; }
      100% { width: 100%; }
    }
    
    /* Custom styles for components */
    .sidebar {
      width: 16rem;
      background-color: #fff;
      border-right: 1px solid #e5e7eb;
    }
    
    .dark .sidebar {
      background-color: #0F0F12;
      border-right-color: #1F1F23;
    }
    
    .main-content {
      background-color: #fff;
    }
    
    .dark .main-content {
      background-color: #0F0F12;
    }
    
    .card {
      border: 1px solid #e5e7eb;
      border-radius: 0.75rem;
      background-color: #fff;
    }
    
    .dark .card {
      background-color: #0F0F12;
      border-color: #1F1F23;
    }
    
    .header {
      height: 4rem;
      border-bottom: 1px solid #e5e7eb;
    }
    
    .dark .header {
      border-bottom-color: #1F1F23;
    }
    
    /* Mobile menu */
    @media (max-width: 1024px) {
      .sidebar {
        transform: translateX(-100%);
        position: fixed;
        z-index: 50;
        height: 100%;
        transition: transform 0.2s ease-in-out;
      }
      
      .sidebar.open {
        transform: translateX(0);
      }
      
      .overlay {
        display: none;
      }
      
      .overlay.active {
        display: block;
        position: fixed;
        inset: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 40;
      }
    }
  </style>
</head>
<body>
  <div class="flex h-screen" id="app-container">

    <!-- Sidebar -->
    @include('admin.componets.sidebar')

    <!-- Mobile menu overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <div class="w-full flex flex-1 flex-col">
      <!-- Header -->
      @include('admin.componets.nav')

      <!-- Main Content Area -->
      <main class="flex-1 overflow-auto p-6 bg-white dark:bg-[#0F0F12]">
        <div class="space-y-4">
          <!-- First Row -->
          @yield('content')


        </div>
      </main>
    </div>
  </div>
  <script src="/select.js"></script>
  <script>
    // Initialize Lucide icons
    lucide.createIcons();
    
    // Theme toggle functionality
    const themeToggle = document.getElementById('theme-toggle');
    const appContainer = document.getElementById('app-container');
    appContainer.classList.add('dark');
    // Check for saved theme preference or use system preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      appContainer.classList.add('dark');
    }
    
    themeToggle.addEventListener('click', () => {
      appContainer.classList.toggle('dark');
      const currentTheme = appContainer.classList.contains('dark') ? 'dark' : 'light';
      localStorage.setItem('theme', currentTheme);
    });
    
    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    
    mobileMenuButton.addEventListener('click', () => {
      sidebar.classList.toggle('open');
      overlay.classList.toggle('active');
    });
    
    overlay.addEventListener('click', () => {
      sidebar.classList.remove('open');
      overlay.classList.remove('active');
    });
    
    // Profile dropdown functionality
    const profileDropdown = document.getElementById('profile-dropdown');
    const profileDropdownContent = document.getElementById('profile-dropdown-content');
    
    profileDropdown.addEventListener('click', (e) => {
      e.stopPropagation();
      profileDropdownContent.classList.toggle('hidden');
    });
    
    document.addEventListener('click', (e) => {
      if (!profileDropdown.contains(e.target)) {
        profileDropdownContent.classList.add('hidden');
      }
    });
  </script>
</body>
</html>