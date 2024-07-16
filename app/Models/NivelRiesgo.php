<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelRiesgo extends Model
{
    use HasFactory;

    protected $table = 'NIVELES_RIESGO';

    protected $primaryKey = 'ID';    
    public $timestamps = false;
    protected $fillable = [
        'ID_EMPRESA',
        'NIVEL_RIESGO_1',
        'NIVEL_RIESGO_2',
        'NIVEL_RIESGO_3',
        'NIVEL_RIESGO_4',
        'NIVEL_RIESGO_5',
        'FECHA_ACTUALIZACION',
    ];
}
