<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Descuento;
use Exception;

class ClientController extends Controller
{
    public function index(){
        $paises = DB::table('PAISES')->get();
        $zonas = DB::table('RUTAS')->get();
        return view('client.index', compact('paises','zonas') );
    }

    public function get(Request $request) {
        try {
            DB::beginTransaction();
            $all = Client::limit(100)->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'.$ex
            ]);
        }
    }

    public function descuento(Request $request) {
        try {
            DB::beginTransaction();
            $cliente =Client::where('ID', $request->id)->first();
            if($cliente){
                //return $cliente->ID_Convenio;
                //if ($cliente == "900670137") {
                if ($cliente->ID_Convenio == "900670137") {
                    $descuento =Descuento::get();

                    DB::commit();
                    return response()->json([
                        'response' => true,
                        'data' => $descuento,
                    ]);

                } else {
                    DB::commit();
                return response()->json([
                    'response' => true,
                    'data' => ["Descuento"=>0],
                ]);
                }
                

            

            }else {
                DB::commit();
                return response()->json([
                    'response' => true,
                    'data' => ["Descuento"=>0],
                ]);
            }

            
            
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function add(Request $request) {
        try {
            DB::beginTransaction();
            $radio_persona_add = $request->radio_persona_add;
            $tipo_documento_add = $request->tipo_documento_add;
            $documento_add = $request->documento_add;
            $dv_add = $request->dv_add;
            $nombre_add = $request->nombre_add;
            $pnombre_add = $request->pnombre_add;
            $snombre_add = $request->snombre_add;
            $papellido_add = $request->papellido_add;
            $sapellido_add = $request->sapellido_add;
            $regimen_add = $request->regimen_add;
            $g_contribuyente_add = $request->g_contribuyente_add;
            $movil_add = $request->movil_add;
            $day_add = $request->day_add;
            $month_add = $request->month_add;
            $email_add = $request->email_add;
            $contacto_add = $request->contacto_add;
            $institucional_add = $request->institucional_add;
            $retencion_add = $request->retencion_add;
            $nombre_comercial_add = $request->nombre_comercial_add;
            $url_add = $request->url_add;
            $ingreso_add = $request->ingreso_add;
            $obs_add = $request->obs_add;

            //VERIFICAR SI CLIENTE YA EXISTE

            $existe = Client::where('TipoNit', $tipo_documento_add)
            ->where('Nit', $documento_add)->count();
            if ($existe > 0) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este documento ya se encuentra registrado'
                ]);
            }
            
            $id_cliente = Client::insertGetId([
                'Nombre' => $nombre_add,
                'Nit' => $documento_add,
                'TipoNit' => $tipo_documento_add,
                'DV' => $dv_add,
                'Regimen' => $regimen_add,
                'GranContribuyente' => $g_contribuyente_add,
                'ActividadEconomica' => 0,
                'Movil' => $movil_add,
                'BirthDay' => $day_add,
                'BirthMonth' => $month_add,
                'Mail' => $email_add,
                'URL' => $url_add,
                'FechaIngreso' => $ingreso_add,
                'Contacto' => $contacto_add,
                'Credito' => 0,
                'Referencia' => 'N/A',
                'ReferenciaTelefono1' => 'N/A',
                'ReferenciaTelefono2' => 'N/A',
                'Cupo' => 0,
                'Plazo' => 0,
                'Saldo' => 0,
                'Bloqueo' => '1900-01-01 00:00:00.000',
                'Observaciones' => $obs_add,
                'Institucional' => $institucional_add,
                'Retenedor' => 0,
                'RetenedorModo' => $retencion_add,
                'Notificacion' => 0,
                'Enabled' => 1,
                'Password' => 'ND',
                'Natural' => $radio_persona_add,
                'Nombre1' => $pnombre_add,
                'Nombre2' => $snombre_add,
                'Apellido1' => $papellido_add,
                'Apellido2' => $sapellido_add,
                'Matricula' => 'N/A',
                'Descuento' => 0,
                'PlanPuntos' => 0,
                'Creada' => session('session_login'),
                'NombreComercial' => $nombre_comercial_add,
            ]);

            $all = Client::where('ID', $id_cliente)->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
                'msg' => "Cliente agregado con exito"
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function edit(Request $request) {
        try {
            DB::beginTransaction();
            $id_edit = $request->id_edit;
            $radio_persona_edit = $request->radio_persona_edit;
            $tipo_documento_edit = $request->tipo_documento_edit;
            $documento_edit = $request->documento_edit;
            $dv_edit = $request->dv_edit;
            $nombre_edit = $request->nombre_edit;
            $pnombre_edit = $request->pnombre_edit;
            $snombre_edit = $request->snombre_edit;
            $papellido_edit = $request->papellido_edit;
            $sapellido_edit = $request->sapellido_edit;
            $regimen_edit = $request->regimen_edit;
            $g_contribuyente_edit = $request->g_contribuyente_edit;
            $movil_edit = $request->movil_edit;
            $day_edit = $request->day_edit;
            $month_edit = $request->month_edit;
            $email_edit = $request->email_edit;
            $contacto_edit = $request->contacto_edit;
            $institucional_edit = $request->institucional_edit;
            $retencion_edit = $request->retencion_edit;
            $nombre_comercial_edit = $request->nombre_comercial_edit;
            $url_edit = $request->url_edit;
            $obs_edit = $request->obs_edit;
            $status = $request->status;

            //VERIFICAR SI CLIENTE YA EXISTE
            $existe = Client::where('TipoNit', $tipo_documento_edit)
            ->where('Nit', $documento_edit)->count();
            if ($existe > 1) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este documento ya se encuentra registrado'
                ]);
            }
            
            $id_cliente = Client::where('ID', $id_edit)
            ->update([
                'Nombre' => $nombre_edit,
                'Nit' => $documento_edit,
                'TipoNit' => $tipo_documento_edit,
                'DV' => $dv_edit,
                'Regimen' => $regimen_edit,
                'GranContribuyente' => $g_contribuyente_edit,
                'Movil' => $movil_edit,
                'BirthDay' => $day_edit,
                'BirthMonth' => $month_edit,
                'Mail' => $email_edit,
                'URL' => $url_edit,
                'Contacto' => $contacto_edit,
                'Observaciones' => $obs_edit,
                'Institucional' => $institucional_edit,
                'RetenedorModo' => $retencion_edit,
                'Enabled' => $status,
                'Natural' => $radio_persona_edit,
                'Nombre1' => $pnombre_edit,
                'Nombre2' => $snombre_edit,
                'Apellido1' => $papellido_edit,
                'Apellido2' => $sapellido_edit,
                'NombreComercial' => $nombre_comercial_edit,
            ]);

            $all = Client::get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
                'msg' => "Cliente editado con exito"
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
}
