<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientDomicile extends Model
{
    use HasFactory;

    protected $table = 'CLIENTES_DOMICILIOS';
    
    protected $fillable = [
        'ID_Cliente',
        'Telefono',
    ];
    public $timestamps = false;
}
