<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <div class="grid grid-cols-3 gap-4">
    <!-- Cliente -->
    <div class="col-span-12">
      <label class="block text-sm font-semibold mb-2 INSTRUMENTOS DE MEDIDA">
        INSTRUMENTOS DE MEDIDA
      </label>
    </div>
  </div>

  <!-- EQUIPO UTILIZADO -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      EQUIPO UTILIZADO
    </label>
    <select name="bancoutiliz"  class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option >SELECCIONA</option>
      <option @selected($valvula->bancoutiliz == 'BANCO DORY') value="BANCO DORY">BANCO DORY</option>
      <option @selected($valvula->bancoutiliz == 'BANCO UBE CORPORATION') value="BANCO UBE CORPORATION">BANCO UBE CORPORATION</option>
      <option @selected($valvula->bancoutiliz == 'BANCO DE VACIO') value="BANCO DE VACIO">BANCO DE VACIO</option>
      <option @selected($valvula->bancoutiliz == 'BANCO HIDRAULICO') value="BANCO HIDRAULICO">BANCO HIDRAULICO</option>
    </select>
  </div>
  <!-- Repuestos Stock -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      MANOMETRO Nº
    </label>
    <select name="manom1"  class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option >SELECCIONA</option>
      <option @selected($valvula->manom1 == 'VA-MN-001 0-10') value="VA-MN-001 0-10">VA-MN-001 0-10</option>
      <option @selected($valvula->manom1 == 'VA-MN-002 0-25') value="VA-MN-002 0-25">VA-MN-002 0-25</option>
      <option @selected($valvula->manom1 == 'VA-MN-003 0-400') value="VA-MN-003 0-400">VA-MN-003 0-400</option>
      <option @selected($valvula->manom1 == 'VA-MN-004 0-1000') value="VA-MN-004 0-1000">VA-MN-004 0-1000</option>
      <option @selected($valvula->manom1 == 'UBE-AI-MN-001 0-10') value="UBE-AI-MN-001 0-10">UBE-AI-MN-001 0-10</option>
      <option @selected($valvula->manom1 == 'UBE-AI-MN-002 0-25') value="UBE-AI-MN-002 0-25">UBE-AI-MN-002 0-25</option>
      <option @selected($valvula->manom1 == 'UBE-AI-MN-003 0-100') value="UBE-AI-MN-003 0-100">UBE-AI-MN-003 0-100</option>
      <option @selected($valvula->manom1 == 'UBE-AG-MN-001 0-10') value="UBE-AG-MN-001 0-10">UBE-AG-MN-001 0-10</option>
      <option @selected($valvula->manom1 == 'UBE-AG-MN-002 0-25') value="UBE-AG-MN-002 0-25">UBE-AG-MN-002 0-25</option>
      <option @selected($valvula->manom1 == 'UBE-AG-MN-003 0-100') value="UBE-AG-MN-003 0-100">UBE-AG-MN-003 0-100</option>
      <option @selected($valvula->manom1 == 'UBE-AG-MN-004 0-400') value="UBE-AG-MN-004 0-400">UBE-AG-MN-004 0-400</option>
    </select>
  </div>
</div>
