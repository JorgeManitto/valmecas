<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $guarded = [];
    protected $table = 'pedidos';

    public $timestamps = false;
}
