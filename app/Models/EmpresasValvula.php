<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresasValvula extends Model
{
    //
    protected $table = "empresas_valvula";

    protected $fillable = [
        'nombre',
        'estado'
    ];
}
