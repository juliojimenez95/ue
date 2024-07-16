<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLaboratory extends Model
{
    use HasFactory;

    protected $table = 'USUARIO_LABORATORIO';

    protected $fillable = [
        'ID_USUARIO',
        'ID_LABORATORIO',
    ];
    public $timestamps = false;
}
