<?php

namespace App\Http\Controllers;

use App\Models\EmpresasValvula;
use App\Models\MarcaValvula;
use App\Models\Valvula;
use Illuminate\Http\Request;

class ValvulasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $empresa_select = $request->input('empresa_select');
        $modelo_select = $request->input('modelo_select');

        $finalizada = $request->input('finalizada');
        
        $search = $request->input('search');
        $valvulas = Valvula::query()
        ->when($search, function ($query) use ($search) {
            $query->where('tag_item', 'like', '%' . $search . '%');
        })
        ->when($empresa_select, function ($query) use ($empresa_select) {
            $query->where('cliente', 'like', '%' . $empresa_select . '%');
        })
        ->when($modelo_select, function ($query) use ($modelo_select) {
            $query->whereRaw('LOWER(modelo) LIKE LOWER(?)', ['%' . $modelo_select . '%']);
        })
        ->when($finalizada, function ($query) use ($finalizada) {
            $query->where('finaliz', 'like', '%' . $finalizada . '%');
        })
        ->orderBy('id', 'desc')        
        ->paginate(25);


        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        
        return view('admin.valvulas.index', compact('valvulas', 'search', 'empresas','empresa_select','modelo_select','modelos', 'finalizada'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $method = 'valvulas.store';
        $valvula = new Valvula();
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        return view('admin.valvulas.show', compact('valvula','method','empresas','modelos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $this->returnParams($request);
        $valvula = Valvula::create($params);
        return redirect()->route('valvulas')->with('success', 'Valvula creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id = '')
    {
        $method = 'valvulas.show';
        $valvula = Valvula::findOrFail($id);
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        // dd($valvula);
        return view('admin.valvulas.show', compact('valvula','empresas','modelos','method'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = '')
    {
        $method = 'valvulas.update';
        $valvula = Valvula::findOrFail($id);
        $empresas   = EmpresasValvula::where('estado', 'activo')->get();
        $modelos    = MarcaValvula::where('estado', 'activo')->get();
        return view('admin.valvulas.show', compact('valvula','method','empresas','modelos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $valvula = Valvula::findOrFail($request->id);
        $params = $this->returnParams($request);
        $valvula->update($params);
        return redirect()->route('valvulas')->with('success', 'Valvula actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $valvula = Valvula::findOrFail($id);
        $valvula->delete();
        return redirect()->route('valvulas')->with('success', 'Valvula eliminada correctamente');
    }

    public function returnParams($request){
        // ACÁ BAJO FALTAN AGRGAR VALORES (MARCAR TODO EL FORM Y LUEGO SACAR TODAS LAS VARIABLES) (algunos checkbos tiran "on" (cambiar por si o no))
        // $fentraFormateada = $request->fentra ? \Carbon\Carbon::createFromFormat('Y-m-d', $request->fentra)->format('d-m-Y') : '';
        $fentraFormateada = $request->fentra ?? '';
        // $fsalidaFormateada = $request->fentra ? \Carbon\Carbon::createFromFormat('Y-m-d', $request->fsalida)->format('d-m-Y') : '';
        $fsalidaFormateada = $request->fentra ?? '';
        $params = [
            'tag' => $request->tag_item ?? '',
            'ident' => '',
            'repuesto2' => '',
            'repuesto3' => '',
            'repuesto4' => '',
            'recomendaciones' => $request->recomendaciones ?? '',
            'rating' => '', // aca tenemos que ver la edicion de valmecas
            'storage_id' => '10',
            'user_id' => auth()->user()->id,
            'created_by' => auth()->user()->name,
            'modified_user_id' => '1',
            'modified_by' => 'jorge manitto',
            "oferta" => $request->oferta ?? '',
            "cliente" => $request->cliente ?? '',
            "origen" => $request->origen ?? '',
            "finaliz" => $request->finaliz ?? '',
            "wo" => $request->wo ?? '',
            "recepciona" => $request->recepciona ?? '',
            "fentra" => $fentraFormateada,
            "fsalida" =>$fsalidaFormateada ?? '',
            "sector" => $request->sector ?? '',
            "tag_item" => $request->tag_item ?? '',
            "modelo" => $request->modelo ?? '',
            "tipo" => $request->tipo ?? '',
            "accionamiento" => $request->accionamiento ?? '',
            "diametro" => $request->diametro ?? '',
            "juntabridaentrada" => $request->juntabridaentrada ?? '',
            "juntabridasalida" => $request->juntabridasalida ?? '',
            "material_cuerpo" => $request->material_cuerpo ?? '',
            "material_bonete" =>  $request->material_bonete ?? '',
            "materialasiento" => $request->materialasiento ?? '',
            "tipounion" => $request->tipounion ?? '',
            "materialcierre" =>  $request->materialcierre ?? '',
            "tipocierre" => $request->tipocierre ?? '',
            "repuesto_cuerpo" => $request->repuesto_cuerpo ?? '',
            "u_repuesto_cuerpo" => $request->u_repuesto_cuerpo ?? '',
            "estcuerpo1" => $request->estcuerpo1 ?? '',
            "estcuerpo2" => $request->estcuerpo2 ?? '',
            "estbridas1" => $request->estbridas1 ?? '',
            "estbridas2" => $request->estbridas2 ?? '',
            "estasiencuer1" => $request->estasiencuer1 ?? '',
            "estasiencuer2" => $request->estasiencuer2 ?? '',
            "estasienobtu1" => $request->estasienobtu1 ?? '',
            "estasienobtu2" => $request->estasienobtu2 ?? '',
            "estsopor1" => $request->estsopor1 ?? '',
            "estsopor2" => $request->estsopor2 ?? '',
            "repuesto_bridas" => $request->repuesto_bridas ?? '',
            "u_repuesto_bridas" => $request->u_repuesto_bridas ?? '',
            "repuesto_asientocuerpo" => $request->repuesto_asientocuerpo ?? '',
            "u_repuesto_asientocuerpo" => $request->u_repuesto_asientocuerpo ?? '',
            "repuesto_asientoobturador" => $request->repuesto_asientoobturador ?? '',
            "u_repuesto_asientoobturador" => $request->u_repuesto_asientoobturador ?? '',
            "repuesto_soporteclapleta" => $request->repuesto_soporteclapleta ?? '',
            "u_repuesto_soporteclapeta" => $request->u_repuesto_soporteclapeta ?? '',
            "repuesto_husillo" => $request->repuesto_husillo ?? '',
            "u_repuesto_husillo" => $request->u_repuesto_husillo ?? '',
            "esthusillo1" => $request->esthusillo1 ?? '',
            "esthusillo2" => $request->esthusillo2 ?? '',
            "repuesto_tuerca" => $request->repuesto_tuerca ?? '',
            "u_repuesto_tuerca" => $request->u_repuesto_tuerca ?? '',
            "esttuerca1" => $request->esttuerca1 ?? '',
            "esttuerca2" => $request->esttuerca2 ?? '',
            "repuesto_puente" => $request->repuesto_puente ?? '',
            "u_repuesto_puente" => $request->u_repuesto_puente ?? '',
            "estpuente1" => $request->estpuente1 ?? '',
            "estpuente2" => $request->estpuente2 ?? '',
            "repuesto_reductora" => $request->repuesto_reductora ?? '',
            "u_repuesto_reductora" => $request->u_repuesto_reductora ?? '',
            "estreduc1" => $request->estreduc1 ?? '',
            "estreduc2" => $request->estreduc2 ?? '',
            "repuesto_juntacuerpo" => $request->repuesto_juntacuerpo ?? '',
            "u_repuesto_juntacuerpo" => $request->u_repuesto_juntacuerpo ?? '',
            "estjuntacuerp1" => $request->estjuntacuerp1 ?? '',
            "estjuntacuerp2" => $request->estjuntacuerp2 ?? '',
            "repuesto_esparragos" => $request->repuesto_esparragos ?? '',
            "u_repuesto_esparragos" => $request->u_repuesto_esparragos ?? '',
            "estesparr1" => $request->estesparr1 ?? '',
            "estesparr2" => $request->estesparr2 ?? '',
            "repuesto_backseat" => $request->repuesto_backseat ?? '',
            "u_repuesto_backseat" => $request->u_repuesto_backseat ?? '',
            "estbackseat1" => $request->estbackseat1 ?? '',
            "estbackseat2" => $request->estbackseat2 ?? '',
            "repuesto_resorte" => $request->repuesto_resorte ?? '',
            "u_repuesto_resorte" => $request->u_repuesto_resorte ?? '',
            "estresorte1" => $request->estresorte1 ?? '',
            "estresorte2" => $request->estresorte2 ?? '',
            "repuesto_empaquetadura" => $request->repuesto_empaquetadura ?? '',
            "u_repuesto_empaquetadura" => $request->u_repuesto_empaquetadura ?? '',
            "estempaque1" => $request->estempaque1 ?? '',
            "estempaque2" => $request->estempaque2 ?? '',
            "repuesto_linterna" => $request->repuesto_linterna ?? '',
            "u_repuesto_linterna" => $request->u_repuesto_linterna ?? '',
            "estlinter1" => $request->estlinter1 ?? '',
            "estlinter2" => $request->estlinter2 ?? '',
            "repuesto_prensa" => $request->repuesto_prensa ?? '',
            "u_repuesto_prensa" => $request->u_repuesto_prensa ?? '',
            "estprensa1" => $request->estprensa1 ?? '',
            "estprensa2" => $request->estprensa2 ?? '',
            "repuesto_volante" => $request->repuesto_volante ?? '',
            "u_repuesto_volante" => $request->u_repuesto_volante ?? '',
            "estvolant1" => $request->estvolant1 ?? '',
            "estvolant2" => $request->estvolant2 ?? '',
            "repuesto_fuelle" => $request->repuesto_fuelle ?? '',
            "u_repuesto_fuelle" => $request->u_repuesto_fuelle ?? '',
            "estfuelle1" => $request->estfuelle1 ?? '',
            "estfuelle2" => $request->estfuelle2 ?? '',
            "repuesto_guias" => $request->repuesto_guias ?? '',
            "u_repuesto_guias" => $request->u_repuesto_guias ?? '',
            "estguias1" => $request->estguias1 ?? '',
            "estguias2" => $request->estguias2 ?? '',
            "repuesto_nombreclienteinformado" => $request->repuesto_nombreclienteinformado ?? '',
            "fecha_informdasolicitudrepuestos" => $request->fecha_informdasolicitudrepuestos ?? '',
            "repuestos_listadoext_externo" => $request->repuestos_listadoext_externo ?? '',
            "repuesto1" => $request->repuesto1 ?? '',
            "montdesm_arnes" => $request->montdesm_arnes ?? '',
            "montdesm_andamio" => $request->montdesm_andamio ?? '',
            "montdesm_grua" => $request->montdesm_grua ?? '',
            "montdesm_gruagranton" => $request->montdesm_gruagranton ?? '',
            "montdesm_tractel" => $request->montdesm_tractel ?? '',
            "quitar_calorifugado" => $request->quitar_calorifugado ?? '',
            "ubicacion_altura" => $request->ubicacion_altura ?? '',
            "bancoutiliz" => $request->bancoutiliz ?? '',
            "manom1" => $request->manom1 ?? '',
            "manom2" => $request->manom2 ?? '',
            "pares_apriete" => $request->pares_apriete ?? '',
            "pares_apriete_otros" => $request->pares_apriete_otros ?? '',
            "jundint1" => $request->jundint1 ?? '',
            "jundint2" => $request->jundint2 ?? '',
            "jundint3" => $request->jundint3 ?? '',
            "jundint4" => $request->jundint4 ?? '',
            "jundex1" =>  $request->jundex1 ?? '',
            "jundex2" =>  $request->jundex2 ?? '',
            "jundex3" =>  $request->jundex3 ?? '',
            "jundex4" =>  $request->jundex4 ?? '',
            "jungrues1" => $request->jungrues1 ?? '',
            "jungrues2" => $request->jungrues2 ?? '',
            "jungrues3" => $request->jungrues3 ?? '',
            "jungrues4" => $request->jungrues4 ?? '',
            "juntipo1" => $request->juntipo1 ?? '',
            "juntipo2" => $request->juntipo2 ?? '',
            "juntipo3" => $request->juntipo3 ?? '',
            "juntipo4" => $request->juntipo4 ?? '',
            "juncantid1" => $request->juncantid1 ?? '',
            "juncantid2" => $request->juncantid2 ?? '',
            "juncantid3" => $request->juncantid3 ?? '',
            "juncantid4" => $request->juncantid4 ?? '',
            "pr_visual_cuerpo" => $request->pr_visual_cuerpo ?? '',
            "pr_visual_cierres" => $request->pr_visual_cierres ?? '',
            "pr_visual_tarado" => $request->pr_visual_tarado ?? '',
            "pr_visual_fuelles" => $request->pr_visual_fuelles ?? '',
            "prestrcuerp" => $request->prestrcuerp ?? '',
            "prestrbacks" => $request->prestrbacks ?? '',
            "prestrasb" => $request->prestrasb ?? '',
            "prestra" => $request->prestra ?? '',
            "presprcuerp" => $request->presprcuerp ?? '',
            "presprbacks" => $request->presprbacks ?? '',
            "presprb" => $request->presprb ?? '',
            "prespra" => $request->prespra ?? '',
            "tempcuerp" => $request->tempcuerp ?? '',
            "tempbacks" => $request->tempbacks ?? '',
            "tempb" => $request->tempb ?? '',
            "tempa" => $request->tempa ?? '',
            "caudcuerp" => $request->caudcuerp ?? '',
            "caudbacks" => $request->caudbacks ?? '',
            "caudb" => $request->caudb ?? '',
            "cauda" => $request->cauda ?? '',
            "fluidcuer" => $request->fluidcuer ?? '',
            "fluidbacks" => $request->fluidbacks ?? '',
            "fluidb" => $request->fluidb ?? '',
            "fluida" => $request->fluida ?? '',
            "dircccuerp" => $request->dircccuerp ?? '',
            "direccbacks" => $request->direccbacks ?? '',
            "direccb" => $request->direccb ?? '',
            "direcca" => $request->direcca ?? '',
            "gotacuer" => $request->gotacuer ?? '',
            "gotabacks" => $request->gotabacks ?? '',
            "gotab" => $request->gotab ?? '',
            "gotaa" => $request->gotaa ?? '',
            "duracion_prueba_cuerpo" => $request->duracion_prueba_cuerpo ?? '',
            "duracion_prueba_backseat" => $request->duracion_prueba_backseat ?? '',
            "duracion_prueba_asientosbp" => $request->duracion_prueba_asientosbp ?? '',
            "duracion_prueba_asientosap" => $request->duracion_prueba_asientosap ?? '',
            "pruebcuer" => $request->pruebcuer ?? '',
            "pruebacks" => $request->pruebacks ?? '',
            "pruebb" => $request->pruebb ?? '',
            "prueba" => $request->prueba ?? '',
            "avance_entre_bridas" => $request->avance_entre_bridas ?? '',
            "cota_alto" => $request->cota_alto ?? '',
            "cota_ancho" => $request->cota_ancho ?? '',
            "cota_profundidad" => $request->cota_profundidad ?? '',
            "cota_posicion_actuador" => $request->cota_posicion_actuador ?? '',
            "prepopping" => $request->prepopping ?? '',
            "svfluidpru" =>  $request->svfluidpru ?? '',
            "svprdisp" => $request->svprdisp ?? '',
            "svcriteracep" =>  $request->svcriteracep ?? '',
            "svprfuga90" =>  $request->svprfuga90 ?? '',
            "svlimsup" =>  $request->svlimsup ?? '',
            "svfugperm" =>  $request->svfugperm ?? '',
            "svliminf" =>  $request->svliminf ?? '',
            "pr_fuelle" =>  $request->pr_fuelle ?? '',
            "sv1dispval" =>  $request->sv1dispval ?? '',
            "svprobtur" =>  $request->svprobtur ?? '',
            "svprestr" =>  $request->svprestr ?? '',
            "svtipofuga" =>  $request->svtipofuga ?? '',
            "svdispvacio" =>  $request->svdispvacio ?? '',
            "svprfugacep" => $request->svprfugacep ?? '',
            "svprtardacep" =>  $request->svprtardacep ?? '',
            "sva" => $request->sva ?? '',
            "svb" => $request->svb ?? '',
            "svc" => $request->svc ?? '',
            "svd" => $request->svd ?? '',
            "sve" => $request->sve ?? '',
            "svf" => $request->svf ?? '',
            "svg" => $request->svg ?? '',
            "svh" => $request->svh ?? '',
            "svi" => $request->svi ?? '',
            "svj" => $request->svj ?? '',
            "svk" => $request->svk ?? '',
            "diametrosalida" => $request->diametrosalida ?? '',
            "ratingsalida" => $request->ratingsalida ?? '',
            'incidencia_grave' => $request->incidencia_grave ?? '',
            'par_apriete_paso1' => $request->par_apriete_paso1 ?? '',
            'par_apriete_paso2' => $request->par_apriete_paso2 ?? '',
            'par_apriete_paso3' => $request->par_apriete_paso3 ?? '',

            "fmano2" => $request->fmano2 ?? '',
            'file_imagen1' => $request->file_imagen1 ?? '',
            'file_oca' => $request->file_oca ?? '',
            'motivo_rep' => $request->motivo_rep ?? '',
            'svcriteracep13' => $request->svcriteracep13 ?? '',
            'svcriteracep097' => $request->svcriteracep097 ?? '',
            'svprfuga090' => $request->svprfuga090 ?? '',
            'adjunto' => $request->adjunto ?? '',
            'codigoqr' => $request->codigoqr ?? '',
            'pdf_export' => $request->pdf_export ?? '',
            'ubicacion_longitud' => $request->ubicacion_longitud ?? '',
            'ubicacion_latitud' => $request->ubicacion_latitud ?? '',
            'ubicacion_link' => $request->ubicacion_link ?? '',
            'presion_prepopping' => $request->presion_prepopping ?? '',
            'identif_correcta' => $request->identif_correcta ?? '',
            'valv_nueva_marcasdesper' => $request->valv_nueva_marcasdesper ?? '',
            'valvseg_existevalv_bloqueo' => $request->valvseg_existevalv_bloqueo ?? '',
            'valvseg_fugavalv_bloqueo' => $request->valvseg_fugavalv_bloqueo ?? '',
            'grafica_presion' => $request->grafica_presion ?? '',
            'equipo_protege' => $request->equipo_protege ?? '',
            'descarga_atmosfera' => $request->descarga_atmosfera ?? '',
            'imagen_antesreparacion' => $request->imagen_antesreparacion ?? '',
            'oca' => $request->oca ?? '',
            'nomb_oca' => $request->nomb_oca ?? '',
            'pruebaimg' => $request->pruebaimg ?? '',
            'grafica_presion1' => $request->grafica_presion1 ?? '',
            'grafica_presion2' => $request->grafica_presion2 ?? '',
            'adjunto1' => $request->adjunto1 ?? '',
            'adjunto2' => $request->adjunto2 ?? '',
            'estado_incidencia_grave' => $request->estado_incidencia_grave ?? '',
            'modified' => now(),
        ];
        return $params;                
    }
}
