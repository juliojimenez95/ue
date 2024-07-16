<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $table = 'CUESTIONARIOS';

    protected $primaryKey = 'ID';
    
    public $timestamps = false;
    protected $fillable = [
        'FECHA',
        'ID_USUARIO',
        'ID_EMPRESA',
        'RESP_1',
        'EVIDENCIA_1',
        'RESP_2',
        'EVIDENCIA_2',
        'RESP_3',
        'EVIDENCIA_3',
        'RESP_4',
        'EVIDENCIA_4',
        'RESP_5',
        'EVIDENCIA_5',
        'RESP_6',
        'EVIDENCIA_6',
        'RESP_7',
        'EVIDENCIA_7',
        'RESP_8',
        'EVIDENCIA_8',
        'RESP_9',
        'EVIDENCIA_9',
        'RESP_10',
        'EVIDENCIA_10',
        'RESP_11',
        'EVIDENCIA_11',
        'RESP_12',
        'EVIDENCIA_12',
        'RESP_13',
        'EVIDENCIA_13',
        'RESP_14',
        'EVIDENCIA_14',
        'RESP_15',
        'EVIDENCIA_15',
        'RESP_16',
        'EVIDENCIA_16',
        'RESP_17',
        'EVIDENCIA_17',
        'RESP_18',
        'EVIDENCIA_18',
        'RESP_19',
        'EVIDENCIA_19',
        'RESP_20',
        'EVIDENCIA_20',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'ID_USUARIO');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'ID_EMPRESA');
    }
}
