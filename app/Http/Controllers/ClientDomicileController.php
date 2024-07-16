<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientDomicile;
use App\Models\Domicile;
use DB;

class ClientDomicileController extends Controller
{
    public function get(Request $request) {
        try {
            DB::beginTransaction();

            $id = $request->id;

            $all = Client::join('CLIENTES_DOMICILIOS','CLIENTES.ID','CLIENTES_DOMICILIOS.ID_Cliente')
            ->join('DOMICILIOS','CLIENTES_DOMICILIOS.Telefono','DOMICILIOS.Telefono')
            ->select('CLIENTES_DOMICILIOS.ID_Cliente','DOMICILIOS.*')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function get_p(Request $request) {
        try {
            DB::beginTransaction();

            $id = $request->id;

            $all = Client::join('CLIENTES_DOMICILIOS','CLIENTES.ID','CLIENTES_DOMICILIOS.ID_Cliente')
            ->join('DOMICILIOS','CLIENTES_DOMICILIOS.Telefono','DOMICILIOS.Telefono')
            ->select('CLIENTES_DOMICILIOS.ID_Cliente','DOMICILIOS.*')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->where('DOMICILIOS.Enabled', 1)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
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
            $id = $request->id;
            $telefono_d = $request->telefono_d;
            $direccion_d = $request->direccion_d;
            $pais_d = $request->pais_d;
            $departamento_d = $request->departamento_d;
            $ciudad_d = $request->ciudad_d;
            $codigop_d = $request->codigop_d;
            $zona_d = $request->zona_d;
            $domicilio_d = $request->domicilio_d;

            //DOMICILIO YA CREADO EN EL MISMO CLIENTE
            $dom_mis = ClientDomicile::where('ID_Cliente', $id)
            ->where('Telefono', $telefono_d)
            ->count();
            if ($dom_mis > 0) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este teléfono esta vinculado a uno de sus domicilio'
                ]);
            }

            //DOMICILIO CREADO EN CLIENTE DIFERENTE
            $dom_dif = ClientDomicile::where('ID_Cliente','!=', $id)
            ->where('Telefono', $telefono_d)
            ->count();
            if ($dom_dif > 0) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este teléfono esta vinculado a un domicilio de otro cliente'
                ]);
            }
            //AGREGAR DOMICILIO
            $id_domicilio = Domicile::insert([
                'Telefono' => $telefono_d,
                'Direccion' => $domicilio_d,
                'Pais' => $pais_d,
                'Departamento' => $departamento_d,
                'Ciudad' => $ciudad_d,
                'Domicilio' => $direccion_d,
                'ID_Ruta' => $zona_d,
                'CodigoPostal' => $codigop_d,
                'Enabled' => 1,
            ]);
            $id_cliente = ClientDomicile::insert([
                'ID_Cliente' => $id,
                'Telefono' => $telefono_d,
            ]);
            $all = Client::join('CLIENTES_DOMICILIOS','CLIENTES.ID','CLIENTES_DOMICILIOS.ID_Cliente')
            ->join('DOMICILIOS','CLIENTES_DOMICILIOS.Telefono','DOMICILIOS.Telefono')
            ->select('CLIENTES_DOMICILIOS.ID_Cliente','DOMICILIOS.*')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'msg' => "Domicilio agregado con exito",
                'data' => $all,
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

            $id = $request->id;
            $telefono_d = $request->telefono_d;
            $direccion_d = $request->direccion_d;
            $pais_d = $request->pais_d;
            $departamento_d = $request->departamento_d;
            $ciudad_d = $request->ciudad_d;
            $codigop_d = $request->codigop_d;
            $zona_d = $request->zona_d;
            $domicilio_d = $request->domicilio_d;

            //DOMICILIO YA CREADO EN EL MISMO CLIENTE
            $dom_mis = ClientDomicile::where('ID_Cliente', $id)
            ->where('Telefono', $telefono_d)
            ->count();
            if ($dom_mis > 1) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este teléfono esta vinculado a uno de sus domicilio'
                ]);
            }

            //DOMICILIO CREADO EN CLIENTE DIFERENTE
            $dom_dif = ClientDomicile::where('ID_Cliente','!=', $id)
            ->where('Telefono', $telefono_d)
            ->count();
            if ($dom_dif > 0) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este teléfono esta vinculado a un domicilio de otro cliente'
                ]);
            }
            //AGREGAR DOMICILIO
            $id_domicilio = Domicile::where('Telefono', $telefono_d)
            ->update([
                'Direccion' => $direccion_d,
                'Pais' => $pais_d,
                'Departamento' => $departamento_d,
                'Ciudad' => $ciudad_d,
                'Domicilio' => $domicilio_d,
                'ID_Ruta' => $zona_d,
                'CodigoPostal' => $codigop_d,
            ]);

            $all = Client::join('CLIENTES_DOMICILIOS','CLIENTES.ID','CLIENTES_DOMICILIOS.ID_Cliente')
            ->join('DOMICILIOS','CLIENTES_DOMICILIOS.Telefono','DOMICILIOS.Telefono')
            ->select('CLIENTES_DOMICILIOS.ID_Cliente','DOMICILIOS.*')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'msg' => "Domicilio editado con exito",
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function delete(Request $request) {
        try {
            DB::beginTransaction();

            $id = $request->id;
            $telefono = $request->telefono;
            $estado = $request->estado;

            $status = 0;
            if ($estado == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            

            
            //ELIMINAR DOMICILIO
            Domicile::join('CLIENTES_DOMICILIOS','DOMICILIOS.Telefono','CLIENTES_DOMICILIOS.Telefono')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->where('DOMICILIOS.Telefono', $telefono)
            ->update([
                'Enabled' => $status,
            ]);

            $all = Client::join('CLIENTES_DOMICILIOS','CLIENTES.ID','CLIENTES_DOMICILIOS.ID_Cliente')
            ->join('DOMICILIOS','CLIENTES_DOMICILIOS.Telefono','DOMICILIOS.Telefono')
            ->select('CLIENTES_DOMICILIOS.ID_Cliente','DOMICILIOS.*')
            ->where('CLIENTES_DOMICILIOS.ID_Cliente', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'msg' => "Estado editado con exito",
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function dep(Request $request) {
        try {

            $id = $request->id;

            DB::beginTransaction();
            $all = DB::table('DEPARTAMENTOS')
            ->where('ID_Pais', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function mun(Request $request) {
        try {

            $id = $request->id;

            DB::beginTransaction();
            $all = DB::table('MUNICIPIOS')
            ->where('Departamento', $id)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }
}
