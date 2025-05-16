<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
      
    @endif
</head>
<body>
  <div class="grid min-h-svh lg:grid-cols-2">
    <div class="flex flex-col gap-4 p-6 md:p-10">      
      <div class="flex flex-1 items-center justify-center">
        <div class="w-full max-w-xs">
          <form class="flex flex-col gap-6" method="POST" id="formLogin" action="{{ route('login.post') }}">
            @csrf
            <div class="flex flex-col items-center gap-2 text-center">
              <a href="{{ route('home', ['id'=>1]) }}" class="mb-4">
                <img
                    src="{{ asset('logoweb2-old.png') }}"
                    alt="Laravel Logo"
                    class="object-contain m-auto"
                    loading="lazy"
                />
              </a>
              <p class="text-balance text-sm text-muted-foreground">
                Ingresa tus credenciales para acceder a tu cuenta.
              </p>
            </div>
            <div class="grid gap-6">
              <div class="grid">
                <div>
                  @error('username')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                  @enderror
                  @error('email')
                    <div class="text-sm text-red-500">{{ $message }}</div>
                  @enderror
                  @php
                  // if (!empty($errors)) {
                  //   # code...
                  //   dd($errors);
                  // }
                  @endphp
                </div>
              </div>
              <div class="grid gap-2">
                <label for="username" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Nombre de usuario o Email</label>
                <input id="username" name="username" type="text" placeholder="m@example.com" required class="flex h-10 w-full rounded-md border border-gray-300 bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
              </div>
              <div class="grid gap-2">
                <div class="flex items-center">
                  <label for="password" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">Password</label>
                  <a href="#" class="ml-auto text-sm underline-offset-4 hover:underline">
                    Forgot your password?
                  </a>
                </div>
                <input id="password" type="password" name="password" required class="flex h-10 w-full rounded-md border border-gray-300  bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
              </div>
              <button type="submit" class="inline-flex bg-gray-600 items-center justify-center whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full cursor-pointer text-white font-bold shadow-sm hover:shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:outline-none gap-4">
                <div class="loader"></div>
                Ingresar
              </button>

            </div>

          </form>
        </div>
      </div>
    </div>
    <div class="relative hidden bg-black lg:block">
      <img src="https://grupohidraulica.com/wp-content/uploads/2024/02/valvula-cierre-estacion-bombeo-agua-es-tuberia-tanques-agua-sala-industrial-suministro-agua-alta-pres-min-1024x683.jpg" alt="Image" class="absolute inset-0 h-full w-full object-cover brightness-[0.2] grayscale" lazyload="lazy" />
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const loader = document.querySelector('.loader');
      const button = document.querySelector('button[type="submit"]');
      const form = document.getElementById('formLogin');
      button.addEventListener('click', function() {
        loader.style.display = 'block';
        button.disabled = true; // Disable the button to prevent multiple clicks
        form.submit(); // Submit the form
      });
    });
  </script>
  <style>
    .loader {
      display: none;
      width: 20px;
      aspect-ratio: 1;
      border-radius: 50%;
      background: 
        radial-gradient(farthest-side,#ffa516 94%,#0000) top/4px 4px no-repeat,
        conic-gradient(#0000 30%,#ffa516);
      -webkit-mask: radial-gradient(farthest-side,#0000 calc(100% - 4px),#000 0);
      animation: l13 1s infinite linear;
    }
    @keyframes l13{ 
      100%{transform: rotate(1turn)}
    }
  </style>
</body>
</html>
