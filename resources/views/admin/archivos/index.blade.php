@extends('admin.layout')
@section('content')
@section('title', 'Archivos')
<div class="max-w-4xl mx-0 bg-white p-6 rounded-lg shadow-lg">
  <h1 class="text-xl font-bold mb-4">ARCHIVOS BP</h1>
  <h2 class="text-lg font-semibold mb-2">Archivos en directorio:</h2>
  <ul class="space-y-2">
      <li class="flex items-center text-orange-400 font-semibold">
          <span class="mr-2">📂</span> BRIDAS ALKI 2017
      </li>
      <li class="flex items-center text-orange-400 font-semibold">
          <span class="mr-2">📂</span> bridas_alky22
      </li>
      <li class="flex items-center text-orange-400 font-semibold">
          <span class="mr-2">📂</span> PLANOS
      </li>
      <li class="flex items-center text-orange-300">
          <span class="mr-2">📎</span> <a href="#" class="hover:underline">01F012CV.pdf</a>
      </li>
      <li class="flex items-center text-orange-300">
          <span class="mr-2">📎</span> <a href="#" class="hover:underline">01F023CV.pdf</a>
      </li>
      <li class="flex items-center text-orange-300">
          <span class="mr-2">📎</span> <a href="#" class="hover:underline">01F05CV.pdf</a>
      </li>
      <li class="flex items-center text-orange-300">
          <span class="mr-2">📎</span> <a href="#" class="hover:underline">01F092CV.pdf</a>
      </li>
  </ul>
</div>
@endsection