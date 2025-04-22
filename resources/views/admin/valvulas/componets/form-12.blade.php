<div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-6 mx-auto">
    <h2 class="text-center text-lg font-bold bg-gray-200 py-2 rounded">
        RESULTADO DE LA PRUEBA
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <!-- TARADO / FUGAS -->
        <div class="bg-gray-300 p-3 rounded text-center font-semibold">
            TARADO
        </div>
        <div class="bg-gray-300 p-3 rounded text-center font-semibold">
            FUGAS
        </div>

        <!-- 1 DISPARO VÁLIDO / PRESIÓN DE REOBTURACIÓN -->
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">1 DISPARO VÁLIDO</label>
            <input type="text" class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="sv1dispval" value="{{ $valvula->sv1dispval }}">
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">PRESIÓN DE REOBTURACIÓN</label>
            <input type="text" class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svprobtur" value="{{ $valvula->svprobtur }}">
        </div>

        <!-- PRESIÓN DE TRABAJO / TIPO DE FUGA -->
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">PRESIÓN DE TRABAJO</label>
            <input type="text" class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svprestr" value="{{ $valvula->svprestr }}">
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">TIPO DE FUGA</label>
            <input type="text" class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svtipofuga" value="{{ $valvula->svtipofuga }}">
        </div>

        <!-- DISPARO EN VACÍO / PRUEBA DE FUGA ACEPTABLE -->
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">DISPARO EN VACÍO</label>
            <input type="text" class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svdispvacio" value="{{ $valvula->svdispvacio }}">
        </div>
        <div class="flex flex-col gap-1">
            <label class="text-sm font-medium">PRUEBA DE FUGA ACEPTABLE</label>
            <select class="w-full border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svprfugacep">
                <option>Selecciona</option>
                <option @selected($valvula->svprfugacep == 'Ok') value="Ok">Ok</option>
                <option @selected($valvula->svprfugacep == 'No Ok') value="No Ok">No Ok</option>
            </select>
        </div>

        <!-- PRUEBA DE TARADO ACEPTABLE (Ocupa dos columnas en pantallas grandes) -->
        <div class="col-span-1 sm:col-span-2 flex flex-col gap-1">
            <label class="text-sm font-medium">PRUEBA DE TARADO ACEPTABLE</label>
            <select class="w-full sm:w-1/2 border border-gray-400 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-500" name="svprtardacep">
                <option>Selecciona</option>
                <option @selected($valvula->svprtardacep == 'Ok') value="Ok">Ok</option>
                <option @selected($valvula->svprtardacep == 'No Ok') value="No Ok">No Ok</option>
            </select>
        </div>
    </div>
</div>