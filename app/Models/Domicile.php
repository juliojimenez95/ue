<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicile extends Model
{
    use HasFactory;

    protected $table = 'DOMICILIOS';
    
    protected $fillable = [
        'Telefono',
        'Direccion',
        'Pais',
        'Departamento',
        'Ciudad',
        'Domicilio',
        'ID_Ruta',
        'CodigoPostal',
        'Enabled',
    ];
    public $timestamps = false;
}
