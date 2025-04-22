<div class="w-full max-w-4xl bg-white 200 rounded-lg shadow-lg p-6 mx-auto">
  <h2 class="text-xl font-semibold text-center mb-4">Archivos Adjuntos</h2>

  <div class="space-y-4">
      <!-- Fila 1 -->
      <div class="flex flex-col  fap-2">
          <label class=" font-medium">Añadir Imagen Internos Previo Reparación:</label>
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600">
      </div>

      <!-- Fila 2 -->
      <div class="flex flex-col  fap-2">
          <label class=" font-medium">Añadir Imagen Válvula:</label>
          @if ($valvula->file_imagen1) 
          <div>
            <img src="{{$imagen}}" alt="Imagen" class="object-contain mx-auto w-full h-full rounded-lg shadow-md mb-4" id="preview-image1">
          </div>
          @endif
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600" name="file_imagen1" id="file_imagen1" accept="image/*">
          @if ($valvula->file_imagen1) 
            <script>
                const fileInputs = document.getElementById('file_imagen1');
                const previewImage = document.getElementById('preview-image1');

                fileInputs.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    } else {
                        previewImage.src = '';
                    }
                });
            </script>
         @endif
      </div>

      <!-- Fila 3 -->
      <div class="flex flex-col fap-2">
          <label class=" font-medium">Añadir Archivo OCA:</label>
          @if ($valvula->file_oca) 
            @php
                if (str_contains($valvula->file_oca, '/homepages')) {
                    $imagenOca = str_replace('/homepages/32/d467861861/htdocs/www2/','https://valmecas.es/',$valvula->file_oca) ;
                }else{
                    $imagenOca = $valvula->file_oca;
                    $imagenOca = asset('storage/'.$imagenOca);
                }
            @endphp
          <div>
            <img src="{{$imagenOca}}" alt="Imagen" class="object-contain mx-auto w-full h-full rounded-lg shadow-md mb-4" id="preview-oca">
          </div>
          @endif
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600" name="file_oca" id="file_oca" accept="image/*">
          @if ($valvula->file_oca) 
            <script>
              const fileOca = document.getElementById('file_oca');
              const previewOca = document.getElementById('preview-oca');

                fileOca.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            previewOca.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    } else {
                        previewOca.src = '';
                    }
                });
            </script>
       @endif
      </div>

      <!-- Fila 4 -->
      <div class="flex flex-col  fap-2">
          <label class=" font-medium">Añadir Adjunto:</label>

            @if ($valvula->adjunto)
                @php
                    if (str_contains($valvula->adjunto, '/homepages')) {
                        $imagenAdjunto = str_replace('/homepages/32/d467861861/htdocs/www2/','https://valmecas.es/',$valvula->adjunto) ;
                    }else{
                        $imagenAdjunto = $valvula->adjunto;
                        $imagenAdjunto = asset('storage/'.$imagenAdjunto);
                    }
                @endphp
                <div>
                    <img src="{{$imagenAdjunto}}" alt="Imagen" class="object-contain mx-auto w-full h-full rounded-lg shadow-md mb-4" id="preview-adjunto">
                </div>
            @endif
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600" id="adjunto" accept="image/*" name="adjunto">
            @if ($valvula->adjunto) 
                <script>
                const fileAdjunto = document.getElementById('adjunto');
                const previewAdjunto = document.getElementById('preview-adjunto');
    
                    fileAdjunto.addEventListener('change', function() {
                        const file = this.files[0];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                previewAdjunto.src = e.target.result;
                            }
                            reader.readAsDataURL(file);
                        } else {
                            previewAdjunto.src = '';
                        }
                    });
                </script>
            @endif
      </div>

      <!-- Fila 5 -->
      <div class="flex flex-col  fap-2">
          <label class=" font-medium">Añadir Adjunto 1:</label>
            @if ($valvula->adjunto1)
                @php
                    if (str_contains($valvula->adjunto1, '/homepages')) {
                        $imagenAdjunto1 = str_replace('/homepages/32/d467861861/htdocs/www2/','https://valmecas.es/',$valvula->adjunto1) ;
                    }else{
                        $imagenAdjunto1 = $valvula->adjunto1;
                        $imagenAdjunto1 = asset('storage/'.$imagenAdjunto1);
                    }
                @endphp
                <div>
                    <img src="{{$imagenAdjunto1}}" alt="Imagen" class="object-contain mx-auto w-full h-full rounded-lg shadow-md mb-4" id="preview-adjunto-1">
                </div>
            @endif
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600" accept="image/*" id="adjunto1" name="adjunto1">
          @if ($valvula->adjunto1) 
          <script>
          const fileAdjunto1 = document.getElementById('adjunto1');
          const previewAdjunto1 = document.getElementById('preview-adjunto-1');

              fileAdjunto1.addEventListener('change', function() {
                  const file = this.files[0];
                  if (file) {
                      const reader = new FileReader();
                      reader.onload = function(e) {
                          previewAdjunto1.src = e.target.result;
                      }
                      reader.readAsDataURL(file);
                  } else {
                      previewAdjunto1.src = '';
                  }
              });
          </script>
      @endif
      </div>

      <!-- Fila 6 -->
      <div class="flex flex-col  fap-2">
          <label class=" font-medium">Añadir Adjunto 2:</label>
          @if ($valvula->adjunto2)
                @php
                    if (str_contains($valvula->adjunto1, '/homepages')) {
                        $imagenAdjunto2 = str_replace('/homepages/32/d467861861/htdocs/www2/','https://valmecas.es/',$valvula->adjunto2) ;
                    }else{
                        $imagenAdjunto2 = $valvula->adjunto2;
                        $imagenAdjunto2 = asset('storage/'.$imagenAdjunto2);
                    }
                @endphp
                <div>
                    <img src="{{$imagenAdjunto2}}" alt="Imagen" class="object-contain mx-auto w-full h-full rounded-lg shadow-md mb-4" id="preview-adjunto-2">
                </div>
            @endif
          <input type="file" class=" bg-gray-200 200 p-2 rounded border border-gray-600" accept="image/*" id="adjunto2" name="adjunto2">
          @if ($valvula->adjunto2) 
          <script>
          const fileAdjunto2 = document.getElementById('adjunto2');
          const previewAdjunto2 = document.getElementById('preview-adjunto-2');

              fileAdjunto2.addEventListener('change', function() {
                  const file = this.files[0];
                  if (file) {
                      const reader = new FileReader();
                      reader.onload = function(e) {
                          previewAdjunto2.src = e.target.result;
                      }
                      reader.readAsDataURL(file);
                  } else {
                      previewAdjunto2.src = '';
                  }
              });
          </script>
      @endif
      </div>
  </div>
</div>
