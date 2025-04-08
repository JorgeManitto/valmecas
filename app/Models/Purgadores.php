<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purgadores extends Model
{
    protected $table = 'purgadores';
    protected $fillable = [
        'id',
        'storage_id',
        'user_id',
        'created',
        'created_by',
        'modified_user_id',
        'modified',
        'modified_by',
        'TAG_Antiguo',
        'Ubicacion',
        'TAG_Nuevo',
        'Detalle_de_Ubicacion',
        'Modelo',
        'Fabricante',
        'Tipo_de_Producto',
        'Tamano',
        'Pulgadas',
        'Tipo_de_Aplicacion',
        'Condicion',
        'Presion',
        'Ubicaci_n',
        'Tipo_de_Conexion',
        'condicion1',
        'condicion2',
        'condicion3',
        'condicion4',
        'audita1',
        'audita2',
        'audita3',
        'audita4',
        'audita5',
        'fecha_audita1',
        'fecha_audita2',
        'fecha_audita3',
        'fecha_audita4',
        'fecha_audita5',
        'temp_entrada',
        'temp_salida',
        'posicion_instalacion',
        'presion_entrada',
        'presion_salida',
        'comentarios',
        'decibelios',
        'imagen_termografica',
        'adjunto1',
        'adjunto2',
        'boton_coordenadas',
        'latitud',
        'longitud',
        'altura',
        'comentarios_localiz',
        'oferta',
        'wo',
        'ultima_actualizacion',
        'foto_modelo',
        'hoja_tecnica',
        'sustituir1',
        'sustituir2',
        'sustituir3',
        'sustituir4',
        'sustituir5',
        'codigomaterial',
        'comentarios_datos_purgador',
        'link',
        'subenfriamiento',
        'valvulapurga',
        'materialpurgador',
        'controladorboya',
        'ciclostermodinamico',
        'fecha_audita20_21',
        'audita20_21',
        'condicion20_21',
        'sustituir20_21',
        'fecha_audita22',
        'audita22',
        'condicion22',
        'sustituir22',
    ];
}
