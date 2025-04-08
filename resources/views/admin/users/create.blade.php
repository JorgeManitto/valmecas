{{-- filepath: c:\proyectos\valmecas\resources\views\admin\users\create.blade.php --}}
@extends('admin.layout')
@section('content')

<div class="max-w-4xl mx-auto rounded-lg shadow-lg ">
  @if (session('error'))
    <div id="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Error:</strong>
        <span class="block sm:inline">{{ session('error') }}</span>
        <button onclick="document.getElementById('errorMessage').remove();" class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 00-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z"/>
            </svg>
        </button>
    </div>
  @endif

  <div class="rounded-xl border border-gray-200 dark:border-[#1F1F23] bg-white dark:bg-[#0F0F12] p-6">
    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-300 mb-6">Agregar Usuario</h2>
    <form action="{{ route('usuarios.store') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombre</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" 
               class="mt-1 block w-full bg-gray-500 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] text-sm text-gray-400 rounded-lg h-10 px-3" 
               placeholder="Nombre del usuario" required>
        @error('name')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombre de usuario</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" 
               class="mt-1 block w-full bg-gray-500 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] text-sm text-gray-400 rounded-lg h-10 px-3" 
               placeholder="Nombre del usuario" required>
        @error('username')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" 
               class="mt-1 block w-full bg-gray-500 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] text-sm text-gray-400 rounded-lg h-10 px-3" 
               placeholder="admin@ejemplo.com" required>
        @error('email')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Contraseña</label>
        <input type="password" id="password" name="password" 
               class="mt-1 block w-full bg-gray-500 dark:bg-[#1F1F23] border-gray-200 dark:border-[#2B2B30] text-sm text-gray-400 rounded-lg h-10 px-3" 
               placeholder="********" required>
        @error('password')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <div class="flex justify-end gap-4">
        <a href="{{ route('usuarios') }}" 
           class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">Cancelar</a>
        <button type="submit" 
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition cursor-pointer">Guardar</button>
      </div>
    </form>
  </div>
</div>

@endsection
@section('title', 'Agregar Usuario')