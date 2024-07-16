<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'CLIENTES';

    protected $fillable = [
        'ID',
        'Nombre',
        'Nit',
        'TipoNit',
        'DV',
        'Regimen',
        'GranContribuyente',
        'ActividadEconomica',
        'Movil',
        'BirthDay',
        'BirthMonth',
        'Mail',
        'URL',
        'FechaIngreso',
        'Contacto',
        'Credito',
        'Referencia',
        'ReferenciaTelefono1',
        'ReferenciaTelefono2',
        'Cupo',
        'Plazo',
        'ID_Convenio',
        'Saldo',
        'Bloqueo',
        'Observaciones',
        'Institucional',
        'Retenedor',
        'RetenedorModo',
        'Notificacion',
        'Enabled',
        'Password',
        'Natural',
        'Nombre1',
        'Nombre2',
        'Apellido1',
        'Apellido2',
        'Matricula',
        'Descuento',
        'PlanPuntos',
        'Creada',
        'NombreComercial',
    ];
    public $timestamps = false;
}
