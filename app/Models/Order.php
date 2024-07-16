<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'FACTURAS_TEMP';
    protected $fillable = [
        "ID",
        "ID_Caja",
        "Factura" , 
        "ID_PuntoVenta" , 
        "Prefijo" , 
        "FechaFactura" ,
        "FechaVencimiento" ,
        "ID_Cliente" , 
        //"ID_Factura" , 
        "Cliente" ,
        "Direccion" ,
        "Ciudad" , 
        "Telefono" , 
        "Plazo" , 
        "Descuento" , 
        "DescuentoPP" , 
        "PorcentajeDescuentoPP" ,
        "RteFuente" , 
        "RteCree" , 
        "RteICA" , 
        "SubTotal" , 
        "IVA" , 
        "RteIVA" , 
        "IMPOCONSUMO" , 
        "Otros" , 
        "Total" , 
        "Saldo" , 
        "ValorLetras" , 
        "Observaciones" ,
        "Remitente" ,
        "Pagado" ,
        "Facturado" ,
        "Enabled" ,
        "Creada" , 
        "Facturada" , 
        "Anulada" , 
       // "Firme" ,
    ];
    public $timestamps = false;
}
