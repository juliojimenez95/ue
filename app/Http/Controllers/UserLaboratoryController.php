<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLaboratory;
use App\Models\User;
use DB;

class UserLaboratoryController extends Controller
{
    public function index(){            
        $laboratorios = DB::table('LABORATORIOS')->get();
        $users = User::where('ESTADO', 1)->get();
        return view('user_laboratory.index', compact('laboratorios', 'users'));
    }

    public function get(Request $request) {
        try {
            DB::beginTransaction();

            $all = User::join('USUARIO_LABORATORIO','USUARIOS_PEDIDOS.ID','USUARIO_LABORATORIO.ID_USUARIO')
            ->join('LABORATORIOS','USUARIO_LABORATORIO.ID_LABORATORIO','LABORATORIOS.ID')
            ->select('USUARIOS_PEDIDOS.ID', 'USUARIOS_PEDIDOS.NOMBRE', DB::raw('COUNT(CAST(USUARIO_LABORATORIO.ID_LABORATORIO AS BIGINT)) AS LABORATORIOS'))
            ->groupBy('USUARIOS_PEDIDOS.ID','USUARIOS_PEDIDOS.NOMBRE')
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

    public function edit(Request $request) {
        try {
            DB::beginTransaction();

            $id = $request->id;

            $array_selected = [];
            $all_s = DB::table('USUARIO_LABORATORIO')
            ->rightjoin('LABORATORIOS','USUARIO_LABORATORIO.ID_LABORATORIO','LABORATORIOS.ID')
            ->select('LABORATORIOS.ID', 'LABORATORIOS.Nombre')
            ->where('USUARIO_LABORATORIO.ID_USUARIO' , $id)
            ->get();

            foreach ($all_s as $key => $a) {
                array_push($array_selected, $a->ID  );
            }

            $all_n = DB::table('LABORATORIOS')
            ->select('LABORATORIOS.ID', 'LABORATORIOS.Nombre')
            ->whereNotIn('ID', $array_selected)
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'data_s' => $all_s,
                'data_n' => $all_n,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function store(Request $request) {
        try {
            DB::beginTransaction();

            $usuario = $request->usuario;
            $codes = $request->codes;

            //DOMICILIO YA CREADO EN EL MISMO CLIENTE
            $del = UserLaboratory::where('ID_USUARIO', $usuario)->delete();

            foreach ($codes as $key => $c) {
                UserLaboratory::insert([
                    'ID_USUARIO' => $usuario,
                    'ID_LABORATORIO' => $c
                ]);
            }
            $all = User::join('USUARIO_LABORATORIO','USUARIOS_PEDIDOS.ID','USUARIO_LABORATORIO.ID_USUARIO')
            ->join('LABORATORIOS','USUARIO_LABORATORIO.ID_LABORATORIO','LABORATORIOS.ID')
            ->select('USUARIOS_PEDIDOS.ID','USUARIOS_PEDIDOS.NOMBRE', DB::raw('COUNT(USUARIO_LABORATORIO.ID_LABORATORIO) AS LABORATORIOS'))
            ->groupBy('USUARIOS_PEDIDOS.ID','USUARIOS_PEDIDOS.NOMBRE')
            ->get();

            DB::commit();
            return response()->json([
                'response' => true,
                'msg' => "Laboratorios asignados con exito",
                'data' => $all,
            ]);
        } catch (Exception $ex) {
            DB::rollBack();
            return $ex;
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }
    
}
