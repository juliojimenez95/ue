<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Order;
use App\Models\Anexomodel;
use App\Models\Domicile;
use App\Models\UserLaboratory;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Storage;


class OrderController extends Controller
{
    public function index()
    {
        date_default_timezone_set('America/Bogota');
        $paises = DB::table('PAISES')->get();
        $zonas = DB::table('RUTAS')->get();
        $id = session('session');
        $lab_in = [];
        $laboratory = UserLaboratory::where('ID_USUARIO', $id)->select('ID_LABORATORIO')->get();
        foreach ($laboratory as $key => $lb) {
            array_push($lab_in, intval($lb->ID_LABORATORIO));
        }
        $referencias = DB::table('REFERENCIAS')
            ->join('LABORATORIOS', 'REFERENCIAS.ID_Laboratorio', 'LABORATORIOS.ID')
            ->join('INVENTARIO', 'REFERENCIAS.Referencia', 'INVENTARIO.Referencia')
            ->where('REFERENCIAS.Enabled', 1)
            ->whereIn('ID_Laboratorio', $lab_in)
            ->select('INVENTARIO.Cantidad', 'REFERENCIAS.Referencia', 'Descripcion1', 'ID_Laboratorio', 'LABORATORIOS.Nombre', 'PrecioVenta')
            ->get();

        $clientes = Client::where('Enabled', 1)->orderBy('Nombre', 'asc')->get();
        return view('order.index', compact('referencias', 'clientes', 'paises', 'zonas'));
    }

    public function get(Request $request)
    {
        try {
            DB::beginTransaction();
            $all = Order::where('Creada', session('session_login'))->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            return $ex;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function get_lotes(Request $request)
    {
        try {
            DB::beginTransaction();
            $referencia = $request->referencia;

            $sql = DB::select("SELECT COALESCE(T1.Lote, T2.Lote, T3.Lote, T4.Lote, T5.Lote, T6.Lote, T7.Lote, T8.Lote, T9.Lote, T10.Lote) AS LOTE,
        COALESCE(T1.COMPRAS, 0) AS COMPRAS, COALESCE(T2.NOTAS_DEVOLUCION, 0) AS NOTAS_DEVOLUCION, COALESCE(T3.ENTRADAS, 0) AS ENTRADAS,
        COALESCE(T4.SALIDAS, 0) AS SALIDAS, COALESCE(T5.FACTURAS, 0) AS FACTURAS, COALESCE(T6.PEDIDOS, 0) AS PEDIDOS,
        COALESCE(T7.NOTAS_CREDITO, 0) AS NOTAS_CREDITO, COALESCE(T8.NOTAS_DEBITO, 0) AS NOTAS_DEBITO, 
        COALESCE(T9.DEVOLUCIONES, 0) AS DEVOLUCIONES, COALESCE(T10.AJUSTES, 0) AS AJUSTES FROM (SELECT LOTE, 
        SUM(CANTIDAD) AS COMPRAS FROM COMPRAS_PRODUCTOS JOIN COMPRAS ON (COMPRAS_PRODUCTOS.ID_Compra = COMPRAS.ID) 
        WHERE REFERENCIA = '" . $referencia . "'" . " AND COMPRAS.ID_PuntoVenta = 'PdeV0' AND COMPRAS.Ingresado = '1' 
        AND COMPRAS.Enabled = '1' GROUP BY LOTE) T1 FULL JOIN (SELECT LOTE, -SUM(CANTIDAD) AS NOTAS_DEVOLUCION 
        FROM NOTAS_DEVOLUCION_PRODUCTOS JOIN NOTAS_DEVOLUCION ON (NOTAS_DEVOLUCION_PRODUCTOS.ID_NotaDevolucion = NOTAS_DEVOLUCION.ID 
        AND NOTAS_DEVOLUCION_PRODUCTOS.ID_PuntoVenta = NOTAS_DEVOLUCION.ID_PuntoVenta) WHERE REFERENCIA = '" . $referencia . "'" . " 
        AND NOTAS_DEVOLUCION.ID_PuntoVenta = 'PdeV0' AND NOTAS_DEVOLUCION.Enabled = '1' GROUP BY LOTE) T2 ON (T1.LOTE = T2.LOTE) 
        FULL JOIN (SELECT LOTE, SUM(CANTIDAD) AS ENTRADAS FROM REMISIONES_PRODUCTOS JOIN REMISIONES 
        ON (REMISIONES_PRODUCTOS.ID_Remision = REMISIONES.ID) WHERE REFERENCIA = '" . $referencia . "'" . " 
        AND REMISIONES.ID_Destino = 'PdeV0' AND REMISIONES.Aprobada = '1' AND REMISIONES.Enabled = '1' GROUP BY LOTE) T3 
        ON (T3.LOTE = T1.LOTE OR T3.LOTE = T2.LOTE) FULL JOIN (SELECT LOTE, -SUM(CANTIDAD) AS SALIDAS 
        FROM REMISIONES_PRODUCTOS JOIN REMISIONES ON (REMISIONES_PRODUCTOS.ID_Remision = REMISIONES.ID) 
        WHERE REFERENCIA = '" . $referencia . "'" . " AND REMISIONES.ID_Origen = 'PdeV0' AND REMISIONES.Aprobada = '1' 
        AND REMISIONES.Enabled = '1' GROUP BY LOTE) T4 ON (T4.LOTE = T1.LOTE OR T4.LOTE = T2.LOTE OR T4.LOTE = T3.LOTE) 
        FULL JOIN (SELECT LOTE, -SUM(CANTIDAD) AS FACTURAS FROM FACTURAS_PRODUCTOS JOIN FACTURAS 
        ON (FACTURAS_PRODUCTOS.ID_Factura = FACTURAS.ID) WHERE REFERENCIA = '" . $referencia . "'" . " AND 
        FACTURAS.ID_PuntoVenta = 'PdeV0' AND FACTURAS.Enabled = '1' GROUP BY LOTE) T5 ON (T5.LOTE = T1.LOTE OR T5.LOTE = T2.LOTE 
        OR T5.LOTE = T3.LOTE OR T5.LOTE = T4.LOTE) FULL JOIN (SELECT LOTE, -SUM(CANTIDAD) AS PEDIDOS FROM PEDIDOS_PRODUCTOS 
        JOIN PEDIDOS ON (PEDIDOS_PRODUCTOS.ID_Pedido = PEDIDOS.ID) WHERE REFERENCIA = '" . $referencia . "'" . " 
        AND PEDIDOS.ID_PuntoVenta = 'PdeV0' AND PEDIDOS.Firme = '1' AND PEDIDOS.Enabled = '1' AND PEDIDOS.ID_Factura IS NULL 
        GROUP BY LOTE) T6 ON (T6.LOTE = T1.LOTE OR T6.LOTE = T2.LOTE OR T6.LOTE = T3.LOTE OR T6.LOTE = T4.LOTE OR T6.LOTE = T5.LOTE) 
        FULL JOIN (SELECT LOTE, SUM(CANTIDAD) AS NOTAS_CREDITO FROM NOTAS_CREDITO_PRODUCTOS JOIN NOTAS_CREDITO 
        ON (NOTAS_CREDITO_PRODUCTOS.ID_NotaCredito = NOTAS_CREDITO.ID 
        AND NOTAS_CREDITO_PRODUCTOS.ID_PuntoVenta = NOTAS_CREDITO.ID_PuntoVenta) WHERE REFERENCIA = '" . $referencia . "'" . " 
        AND NOTAS_CREDITO.ID_PuntoVenta = 'PdeV0' AND NOTAS_CREDITO.Enabled = '1' GROUP BY LOTE) T7 ON (T7.LOTE = T1.LOTE 
        OR T7.LOTE = T2.LOTE OR T7.LOTE = T3.LOTE OR T7.LOTE = T4.LOTE OR T7.LOTE = T5.LOTE OR T7.LOTE = T6.LOTE) 
        FULL JOIN (SELECT LOTE, -SUM(CANTIDAD) AS NOTAS_DEBITO FROM NOTAS__DEBITO_PRODUCTOS JOIN NOTAS_DEBITO 
        ON (NOTAS__DEBITO_PRODUCTOS.ID_NotaDebito = NOTAS_DEBITO.ID AND NOTAS__DEBITO_PRODUCTOS.ID_PuntoVenta = NOTAS_DEBITO.ID_PuntoVenta) 
        WHERE REFERENCIA = '" . $referencia . "'" . " AND NOTAS_DEBITO.ID_PuntoVenta = 'PdeV0' AND NOTAS_DEBITO.Enabled = '1' GROUP BY LOTE) T8 
        ON (T8.LOTE = T1.LOTE OR T8.LOTE = T2.LOTE OR T8.LOTE = T3.LOTE OR T8.LOTE = T4.LOTE OR T8.LOTE = T5.LOTE OR T8.LOTE = T6.LOTE 
        OR T8.LOTE = T7.LOTE) FULL JOIN (SELECT LOTE, SUM(CANTIDAD) AS DEVOLUCIONES FROM DEVOLUCIONES_PRODUCTOS JOIN DEVOLUCIONES 
        ON (DEVOLUCIONES_PRODUCTOS.ID_Devolucion = DEVOLUCIONES.ID AND DEVOLUCIONES_PRODUCTOS.ID_PuntoVenta = DEVOLUCIONES.ID_PuntoVenta)
        WHERE REFERENCIA = '" . $referencia . "'" . " AND DEVOLUCIONES.ID_PuntoVenta = 'PdeV0' AND DEVOLUCIONES.Enabled = '1' GROUP BY LOTE) T9 
        ON (T9.LOTE = T1.LOTE OR T9.LOTE = T2.LOTE OR T9.LOTE = T3.LOTE OR T9.LOTE = T4.LOTE OR T9.LOTE = T5.LOTE OR T9.LOTE = T6.LOTE 
        OR T9.LOTE = T7.LOTE OR T9.LOTE = T8.LOTE) FULL JOIN (SELECT '' AS LOTE, SUM(CANTIDAD) AS AJUSTES FROM INVENTARIO_MOVIMIENTOS 
        WHERE REFERENCIA = '" . $referencia . "'" . " AND INVENTARIO_MOVIMIENTOS.ID_PuntoVenta = 'PdeV0' AND MOVIMIENTO = 'AJUSTE') T10 
        ON (T10.LOTE = T1.LOTE OR T10.LOTE = T2.LOTE OR T10.LOTE = T3.LOTE OR T10.LOTE = T4.LOTE OR T10.LOTE = T5.LOTE 
        OR T10.LOTE = T6.LOTE OR T10.LOTE = T7.LOTE OR T10.LOTE = T8.LOTE OR T10.LOTE = T9.LOTE)
        ORDER BY LOTE");

            $lotes = [];
            $positivo = 0;
            foreach ($sql as $key => $v) {
                $positivo = $v->COMPRAS + $v->NOTAS_DEVOLUCION + $v->ENTRADAS + $v->SALIDAS + $v->FACTURAS +
                    $v->PEDIDOS + $v->NOTAS_CREDITO + $v->NOTAS_DEBITO + $v->DEVOLUCIONES + $v->AJUSTES;

                if ($positivo > 0 && $v->LOTE != "") {
                    array_push($lotes, $v->LOTE);
                }
            }

            $lote_ven = DB::table("COMPRAS_PRODUCTOS")
                ->where('Referencia', $referencia)
                ->whereIn('Lote', $lotes)->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $lote_ven,
            ]);
        } catch (Exception $ex) {
            return $ex;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }
    public function get_range(Request $request)
    {
        try {
            DB::beginTransaction();
            $date_init = $request->date_init;
            $date_end = $request->date_end;
            $all = Order::whereBetween('FechaPedido', [$date_init, $date_end])
                ->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            return $ex;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function add(Request $request)
    {
        try {
            date_default_timezone_set('America/Bogota');
            $store_ref = $request->store_ref;
            $cliente_pedido = $request->cliente_pedido;
            $domicilio_pedido = $request->domicilio_pedido;
            $observaciones = $request->observaciones;
            $referencias = $request->referencias;
            $fehca_v = $request->fehca_v;
            $date = date('Y-m-d');

            $cliente = Client::where('ID', $cliente_pedido)->first();
            $domicilio = Domicile::where('Telefono', $domicilio_pedido)->first();
            $referencias_db = DB::table('REFERENCIAS')->whereIn('Referencia', $referencias)->get();
            $subtotal = 0;
            $total = 0;
            $saltototal = 0;
            $iva = 0;
            $descuento=0;
            $des = $request->descuento_pedido;

            foreach ($store_ref as $key => $s) {
                $ref_db = DB::table('REFERENCIAS')->where('Referencia', $s['referencia'])->first();
                $descuento += ($ref_db->PrecioVenta*intval($des))/100;
                $tot = intval(($ref_db->PrecioVenta * $s['cantidad']) - $descuento);
                $subtotal += intval($tot);
                $iva += intval(($tot * $ref_db->IVA) / 100);
                $total += intval($tot + (($tot * $ref_db->IVA) / 100));
                $saltototal += intval($tot + (($tot * $ref_db->IVA) / 100));
            }
            $id_pedido = DB::table('FACTURAS_TEMP')->max('ID');
            
            DB::beginTransaction();
            $order = new Order();
            $order->ID_Caja = 1;
            $order->Factura = " ";
            $order->ID_PuntoVenta = "PdeV0";
            $order->Prefijo = 0;
            $order->FechaFactura = $date;
            $order->FechaVencimiento = $fehca_v;
            $order->ID_Cliente = $cliente_pedido;
            $order->Cliente = $cliente->Nombre;
            $order->Direccion = $domicilio->Direccion;
            $order->Ciudad = $domicilio->Ciudad;
            $order->Telefono = $domicilio_pedido;
            $order->Plazo = 0;
            $order->Descuento = $descuento;
            $order->DescuentoPP = NULL;
            $order->PorcentajeDescuentoPP = 0;
            $order->RteFuente = 0;
            $order->RteCree = 0;
            $order->RteICA = 0;
            $order->SubTotal = $subtotal;
            $order->IVA = $iva;
            $order->RteIVA = 0;
           // $order->IMPOCONSUMO = 0;
            $order->Otros = 0;
            $order->Total = $total;
            $order->Saldo = $saltototal;
            $order->ValorLetras = NULL;
            $order->Observaciones = $observaciones;
            $order->Remitente = NULL;
            $order->Pagado = 0;
          //  $order->Facturado = 0;
            $order->Enabled = 1;
            $order->Creada = session('session_login');
            //$order->Facturada = "N/A";
            $order->Anulada = "N/A";

            $order->save();


          /*  $id_cliente = Order::create([
                "Factura" => $id_pedido+1,
                "ID_PuntoVenta" => "PdeV0",
                "Prefijo" => 0,
                "FechaFactura" => $date,
                "FechaVencimiento" => $fehca_v,
                "ID_Cliente" => $cliente_pedido,
                //"ID_Factura" => NULL,
                "Cliente" => $cliente->Nombre,
                "Direccion" => $domicilio->Direccion,
                "Ciudad" => $domicilio->Ciudad,
                "Telefono" => $domicilio_pedido,
                "Plazo" => 0,
                "Descuento" => $descuento,
                "DescuentoPP" => NULL,
                "PorcentajeDescuentoPP" => 0,
                "RteFuente" => 0,
                "RteCree" => 0,
                "RteICA" => 0,
                "SubTotal" => $subtotal,
                "IVA" => $iva,
                "RteIVA" => 0,
                "IMPOCONSUMO" => 0,
                'ID_Caja' => 1,
                "Otros" => 0,
                "Total" => $total,
                "Saldo" => $saltototal,
                "ValorLetras" => NULL,
                "Observaciones" => $observaciones,
                "Remitente" => NULL,
                "Pagado" => 0,
               // "Facturado" => 0,
                "Enabled" => 1,
                "Creada" => session('session_login'),
               // "Facturada" => "N/A",
                "Anulada" => "N/A",
            ])->save();*/
           // $all = Order::where('Factura', $id_pedido+1)->first();
           // return $all;
            

            $des = 0;
            foreach ($store_ref as $key => $s) {
                $ref_db = DB::table('REFERENCIAS')->where('Referencia', $s['referencia'])->first();
                $inventario = DB::table('INVENTARIO')->where('Referencia', $s['referencia'])->first();

                if (($inventario->Cantidad - $s['cantidad']) >= 0 && ($inventario->PdeV0 - $s['cantidad']) >= 0) {
                    $descuento = ($ref_db->PrecioVenta * $s['descuento']) / 100;
                    $tot = intval(($ref_db->PrecioVenta * $s['cantidad']) - $descuento);

                    $update_in = DB::table('INVENTARIO')->where('Referencia', $s['referencia'])
                    ->update([
                        'Cantidad' => $inventario->Cantidad - $s['cantidad'],
                        'PdeV0' => $inventario->PdeV0 - $s['cantidad']
                    ]);

                    DB::table('INVENTARIO_MOVIMIENTOS')->insert([
                    'ID_PuntoVenta' => "PdeV0",
                    'ID_Caja' => 1,
                    'Referencia' => $ref_db->Referencia,
                    'Cantidad' => $s['cantidad'],
                    'Fecha' => $date,
                    'Documento' => 0,
                    'Movimiento' => "PEDIDO",
                    'PrecioCompra' => $ref_db->PrecioCompra,
                    'PrecioVenta' => $ref_db->PrecioVenta,
                    'Inventario' => $inventario->Cantidad
                    ]);

                    DB::table('FACTURAS_TEMP_PRODUCTOS')->insert([
                        'ID_Factura' => $order->id,
                        'Referencia' => $ref_db->Referencia,
                        'Lote' => 'N/A',
                        //'Vencimiento' => $fehca_v,
                        'PLM' => $ref_db->PrecioVenta,
                        'Descripcion' => $ref_db->Descripcion1,
                        'Cantidad' => $s['cantidad'],
                        'PrecioVenta' => $ref_db->PrecioVenta,
                        'IVA' => $ref_db->IVA,
                       // 'IMPOCONSUMO' => $ref_db->IMPOCONSUMO,
                        'Total' => intval(($tot) + (($tot * $ref_db->IVA) / 100)),
                       // 'Costo' => $ref_db->PrecioCompra,
                       // 'Precio' => $ref_db->PrecioVenta,
                        //'Comision' => $ref_db->Comision,
                       // 'CC' => 0,
                    ]);
                } else {
                    return response()->json([
                        'response' => false,
                        'msg' => 'La referencia '.$ref_db->Descripcion1.'solo tiene '.$inventario->Cantidad.' en stock'
                    ]);
                }
            }

            $all = Order::where('ID', $order->id)->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
                'msg' => "Pedido agregado con exito"
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente: '.$ex
            ]);
        }
    }

    public function anular(Request $request)
    {
        try {
            DB::beginTransaction();
            $id = $request->id;
            $date = date('Y-m-d');

            //VERIFICAR
            $existe = Order::where('Pagado', 0)
                ->where('Facturado', 0)
                ->where('ID', $id)->count();

            if ($existe > 1) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este pedido no puede ser anulado'
                ]);
            }

            $refs_db = DB::table('PEDIDOS_PRODUCTOS')->where('ID_Pedido', $id)->get();
            foreach ($refs_db as $key => $r) {
                $ref_db = DB::table('REFERENCIAS')->where('Referencia', $r->Referencia)->first();
                $inventario = DB::table('INVENTARIO')->where('Referencia', $r->Referencia)->first();
                $update_in = DB::table('INVENTARIO')->where('Referencia', $r->Referencia)
                    ->update([
                        'Cantidad' => $inventario->Cantidad + $r->Cantidad,
                        'PdeV0' => $inventario->PdeV0 + $r->Cantidad
                    ]);
                DB::table('INVENTARIO_MOVIMIENTOS')->insert([
                    'ID_PuntoVenta' => "PdeV0",
                    'ID_Caja' => 1,
                    'Referencia' => $r->Referencia,
                    'Cantidad' => $r->Cantidad,
                    'Fecha' => $date,
                    'Documento' => $id,
                    'Movimiento' => "PEDIDO DEVOLUCIÓN",
                    'PrecioCompra' => $ref_db->PrecioCompra,
                    'PrecioVenta' => $ref_db->PrecioVenta,
                    'Inventario' => $inventario->Cantidad
                ]);
            }
            $id_cliente = Order::where('Pedido', $id)
                ->update([
                    "Pagado" => 0,
                    "Facturado" => 0,
                    "Enabled" => 0,
                    "Anulada" => session('session_login'),
                ]);

            $all = Order::where('Creada', session('session_login'))->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
                'msg' => "Pedido anulado con exito"
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function get_referencias(Request $request)
    {

        try {
            $id = session('session');
            $lab_in = [];
            $laboratory = UserLaboratory::where('ID_USUARIO', $id)->select('ID_LABORATORIO')->get();
            foreach ($laboratory as $key => $lb) {
                array_push($lab_in, $lb->ID_LABORATORIO);
            }
            $referencias = DB::table('REFERENCIAS')
                ->join('LABORATORIOS', 'REFERENCIAS.ID_Laboratorio', 'LABORATORIOS.ID')
                ->where('REFERENCIAS.Enabled', 1)
                ->whereIn('ID_Laboratorio', $lab_in)
                ->select('Referencia', 'Descripcion1', 'ID_Laboratorio', 'LABORATORIOS.Nombre', 'PrecioVenta')
                ->get();

            return response()->json([
                'response' => true,
                'data' => $referencias,
                'msg' => ""
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'data' => "",
                'msg' => "Error al cargar referencia, intentelo nuevamente"
            ]);
        }
    }
        public function anexo(Request $request)
        {
        
            try {
                //validar obligatorios
                    $r = new  Anexomodel;
                    $name_pdf1 = '';

                    if ($request->file('imagen')){
                          
                        $pdf = $request->file('imagen');
                        $ext = $pdf->getClientOriginalExtension();
                        $name_pdf1 = 'imagen'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                        $url = Storage::disk('documentos')->put($name_pdf1, file_get_contents($pdf));
                        $r->NOMBRE_ARCHIVO = $name_pdf1;
                        $r->ID_FACTURA = $request->ID_FACTURA;

                    }else{
                        return response()->json([
                            'response' => true,
                            'msg' => "No hay archivo "
                        ]);
                    }
                        if ($r->save()) {
                            return response()->json([
                                'response' => true,
                                'data' => $r,
                                'msg' => ""
                            ]);
                        } else {
                            return view('errors.500');

                        }
            } catch (Exception $e) {
                return view('errors.500');

            }
        
        }


    public function pdf($id)
    
    {
        try {
            setlocale(LC_ALL, 'es_ES');
            $pedido = Order::where('ID', $id)->first();
            $cliente = Client::where('ID', $pedido->ID_Cliente)->first();
            $referencias = DB::table('FACTURAS_TEMP_PRODUCTOS')->where('ID_Factura', $id)->get();

            $pdf = \PDF::loadView('order.pdf', compact('pedido','referencias','cliente'))
            ->setPaper('a4', 'landscape');
            return $pdf->download('pedido.pdf');

            // return view('order.pdf', compact('pedido', 'referencias','cliente'));
        } catch (\Throwable $th) {
            return view('errors.500');
        }
        
    }
}
