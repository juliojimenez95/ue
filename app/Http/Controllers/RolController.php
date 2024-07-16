<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Models\Rol;
use Exception;

class RolController extends Controller
{
    
    
    public function index(){
        try {
            // Recuperar todas las empresas
            $roles = Rol::all();
    
            // Retornar la lista de empresas
            return view('rol.index');
        } catch (\Throwable $th) {
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al recuperar la lista de empresas: '.$th
            ]);
        }
    }

    public function get(){
        try {
            $roles = Rol::all();

            
            return response()->json([
                'response' => true,
                'data' => $roles,
                'msg'=> 'Rol encontrado'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error, inténtelo nuevamente: '.$th
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        try {
            date_default_timezone_set('America/Bogota');
            DB::beginTransaction();     
            $nombre = $request->nombre;
            $descripcion = $request->descripcion;

            $username = Rol::where('ROL', $nombre)->first();
            if ($username) {
                return response()->json([
                    'response' => false,
                    'msg' => 'Este rol ya existe'
                ]);
            }
    
            $id_rol = Rol::insertGetId([
                'ROL' => $nombre,
                'DESCRIPCION' => $descripcion
            ]);
    
            $rol = Rol::where('ID', $id_rol)->get();
            $roles = Rol::all();
            
            DB::commit();
            return response()->json([
                'response' => true,
                'data' => $roles,
                'msg'=> 'Rol agregado con éxito'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error, inténtelo nuevamente: '.$th
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        try {
            $rol = Rol::find($id);
            if (!$rol) {
                return response()->json([
                    'response' => false,
                    'msg' => 'El rol no existe'
                ]);
            }
            
            return response()->json([
                'response' => true,
                'data' => $rol,
                'msg'=> 'Rol encontrado'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error, inténtelo nuevamente: '.$th
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
