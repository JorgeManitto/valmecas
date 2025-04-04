<div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
  <div class="grid grid-cols-3 gap-4">
    <!-- Cliente -->
    <div class="col-span-2">
      <label class="block text-sm font-semibold mb-2">
        NOMBRE CLIENTE INFORMADO DE LA SOLICITUD DE REPUESTOS:
      </label>
      <input 
        type="text" 
        class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
      <p class="text-xs text-gray-400 mt-2">
        <strong>Nota:</strong> En caso de solicitud de repuesto SIEMPRE debemos informar al cliente.
      </p>
    </div>
    <!-- Fecha -->
    <div>
      <label class="block text-sm font-semibold mb-2">
        FECHA DE SOLICITUD
      </label>
      <input 
        type="date" 
        class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>
  </div>

  <!-- Repuestos Stock -->
  <div class="mt-4">
    <label class="block text-sm font-semibold mb-2">
      REPUESTOS STOCK:
    </label>
    <input 
      type="text" 
      class="w-full p-2 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
    />
  </div>
</div>
