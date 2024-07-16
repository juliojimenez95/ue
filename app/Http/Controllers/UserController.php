<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $id = session('session_rol');
        //$users = User::where('ROL','!=', $id)->get();
        $users = User::get();

        return view('users.index', compact('users'));
    }

    public function store(Request $request){
        try {
            date_default_timezone_set('America/Bogota');
            DB::beginTransaction();
            $nombre = $request->nombre;
            $telefono = $request->telefono;
            $correo = $request->correo;
            $usuario = $request->usuario;
            $rol = $request->rol;
            $contrasena = $request->documento;

            $date = date('Y-m-d');
            
            $username = User::where('USUARIO', $usuario)->first();
            if ($username) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este usuario ya se encuentra en uso'
                ]);
            }

            $id_user = User::insertGetId([
                'USUARIO' => $request->usuario,
                'CONTRASENA' => sha1($request->documento),
                'NOMBRES' => $request->nombre,
                'APELLIDOS' => $request->apellidos,
                'ID_EMPRESA' => $request->empresa,
                'ID_ROL' => $request->rol,
                'ULTIMO_INGRESO' => $date,
                'ACTIVO' => true
            ]);
            $user = User::where('ID', $id_user)->get();
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $user,
                'msg'=> 'Usuario agregado con exito'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente: '.$th
            ]);
        }
    }
    

    public function update(Request $request){
        try {
            DB::beginTransaction();
            $id = $request->id;
            $nombre = $request->nombre;
            $telefono = $request->telefono;
            $correo = $request->correo;
            $usuario = $request->usuario;
            $rol = $request->rol;
            $status = $request->status;

            $username = User::where('USERNAME', $usuario)->where('ID','!=',$id)->count();
            if ($username > 0) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este usuario ya se encuentra en uso'
                ]);
            }
            $user = User::find($id);
            if($user){
                $d = User::where('ID', $id)
                ->update([
                    'NOMBRE' => $nombre,
                    'TELEFONO' => $telefono,
                    'CORREO' => $correo,
                    'USERNAME' => $usuario,
                    'ROL' => $rol,
                    'ESTADO' => $status,
                ]);
                $user = User::get();
                DB::commit();
                return response()->json([
                    'response' => true,
                    'data' => $user,
                    'msg'=> 'Usuario editado con exito'
                ]);
            }else{
                return response()->json([
                    'response' => false,
                    'msg' => 'Usuario no encontrado'
                ]);
            }
        } catch (\Throwable $th) {
            return $th;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function profile(){
        $id = session('session');
        $user = User::where('ID', $id)->first();
        return view('users.profile',compact('user'));
    }

    public function update_pass(Request $request){
        try {
            DB::beginTransaction();
            $id = $request->id;
            $pass = $request->pass;
            $new_pass = $request->new_pass;

            $user = User::where('ID', $id)->where('CONTRASENA', sha1($pass))->first();
            if($user){
                $d = User::where('ID', $id)
                ->update([
                    'CONTRASENA' => sha1($new_pass),
                    'CHANGE' => 1,
                ]);
                DB::commit();
                return response()->json([
                    'response' => true,
                    'data' => $user,
                    'msg'=> 'Contraseña actualizada con exito'
                ]);
            }else{
                return response()->json([
                    'response' => false,
                    'msg' => 'Contraseña actual invalida'
                ]);
            }
        } catch (\Throwable $th) {
            return $th;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function update_pass_prim(Request $request){
        try {
            DB::beginTransaction();
            $id = $request->id;
            $new_pass_prim = $request->new_pass_prim;

            $d = User::where('ID', $id)
                ->update([
                    'CONTRASENA' => sha1($new_pass_prim),
                    'CHANGE' => 1,
                ]);
            session(['session_change' => 1]);
            DB::commit();
            return response()->json([
                'response' => true,
                'msg' => 'Contraseña actualizada con exito'
            ]);
        } catch (\Throwable $th) {
            return $th;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function update_profile(Request $request){
        try {
            DB::beginTransaction();
            $id = $request->id;
            $nombre = $request->nombre;
            $telefono = $request->telefono;
            $correo = $request->correo;

            $user = User::find($id);
            if($user){
                $d = User::where('ID', $id)
                ->update([
                    'NOMBRE' => $nombre,
                    'TELEFONO' => $telefono,
                    'CORREO' => $correo,
                ]);
                DB::commit();
                return response()->json([
                    'response' => true,
                    'data' => $user,
                    'msg'=> 'Usuario editado con exito'
                ]);
            }else{
                return response()->json([
                    'response' => false,
                    'msg' => 'Usuario no encontrado'
                ]);
            }
        } catch (\Throwable $th) {
            return $th;
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente'
            ]);
        }
    }

    public function get(Request $request) {
        try {
            DB::beginTransaction();
            $all = User::join('EMPRESAS', 'EMPRESAS.ID', '=', 'usuarios.ID_EMPRESA')
            ->join('ROLES', 'ROLES.ID', '=', 'usuarios.ID_ROL')
            ->select('usuarios.*', 'EMPRESAS.RAZON_SOCIAL as empresa_nombre', 'ROLES.ROL as rol_nombre')
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
