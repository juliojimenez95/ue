<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexomodel extends Model
{
    use HasFactory;
    protected $table = 'FACTURAS_TEMP_ANEXO';

    protected $fillable = [
        'ID',
        'ID_FACTURA',
        'NOMBRE_ARCHIVO',
    ];
    public $timestamps = false;

}
