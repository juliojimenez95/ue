<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'EMPRESAS';

    protected $primaryKey = 'ID';    
    public $timestamps = false;
    protected $fillable = [
        'TIPO_ID',
        'RAZON_SOCIAL',
        'DIRECCION',
        'TELEFONO',
        'EMAIL',
        'CONTACTO',
        'SECTOR',
        'NUM_EMPLEADOS',
        'ACTIVO',
    ];
}
