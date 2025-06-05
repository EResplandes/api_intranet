<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avisos extends Model
{
    protected $table = 'avisos';

    protected $fillable = [
        'titulo',
        'texto',
        'ativo',
        'usuario_id',
    ];
}
