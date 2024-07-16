<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use Exception;


class LoginController extends Controller
{
    public function login(Request $request){
        try{
    		DB::beginTransaction();
    		$user = User::where('usuario', $request->username)
    		->where('CONTRASENA', sha1($request->pass))
    		->first();
    		DB::commit();

    		if ($user) {
                if ($user['ACTIVO'] == 0) {
                    return response()->json([
                        'response' => false,
                        'msg' => 'Este usuario se encuentra inactivo'
                    ]);
                }else{
                    session(['session' => $user["ID"]]);
                    session(['session_name' => $user["nombre"]]);
                    session(['session_username' => $user["usuario"]]);
                    session(['session_empresa' => $user["id_empresa"]]);
                    session(['session_rol' => $user["id_rol"]]);
                    session(['session_estado' => $user["ACTIVO"]]);
                    session(['session_change' => $user["CHANGE"]]);
                    session(['session_login' => $user["usuario"]]);
                    return response()->json([
                        'response' => true,
                        'msg'=> 'Inicio de sesion exitoso'
                    ]);
                }

            }else {
               return response()->json([
                'response' => false,
                'msg' => 'Usuario y/o clave incorrecta'
            ]);
           }

        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrio un error intente nuevamente '.$e
            ]);
        }
    }

    public function logout(Request $request){
        $request->session()->forget('session');
        $request->session()->forget('session_name');
        $request->session()->forget('session_username');
        $request->session()->forget('session_rol');
        $request->session()->forget('session_correo');
        $request->session()->forget('session_estado');

        return redirect('/');
    }
}
