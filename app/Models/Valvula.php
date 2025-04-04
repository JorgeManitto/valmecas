<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valvula extends Model
{
    protected $fillable = [
        'storage_id',
        'user_id',
        'created',
        'created_by',
        'modified_user_id',
        'modified',
        'modified_by',
        'tag',
        'oferta',
        'cliente',
        'ident',
        'finaliz',
        'wo',
        'recepciona',
        'fentra',
        'fsalida',
        'sector',
        'tag_item',
        'modelo',
        'tipo',
        'diametro',
        'accionamiento',
        'rating',
        'materialasiento',
        'tipounion',
        'materialcierre',
        'tipocierre',
    ];
    protected $table = 'valvulas';
}
