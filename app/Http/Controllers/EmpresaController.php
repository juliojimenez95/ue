<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use DB;
use Illuminate\Support\Str;
use Exception;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        try {
            // Recuperar todas las empresas
            $empresas = Empresa::all();
    
            // Retornar la lista de empresas
            return response()->json([
                'response' => true,
                'data' => $empresas,
                'msg'=> 'Lista de empresas recuperada exitosamente'
            ]);
        } catch (\Throwable $th) {
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al recuperar la lista de empresas: '.$th
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
            DB::beginTransaction();
            
            // Crear una nueva instancia de Empresa con los datos del formulario
            $empresa = new Empresa([
                'TIPO_ID' => $request->tipo_id,
                'RAZON_SOCIAL' => $request->razon_social,
                'DIRECCION' => $request->direccion,
                'TELEFONO' => $request->telefono,
                'EMAIL' => $request->email,
                'CONTACTO' => $request->contacto,
                'SECTOR' => $request->sector,
                'NUM_EMPLEADOS' => $request->num_empleados,
                'ACTIVO' => true // Por defecto, activamos la empresa al crearla
            ]);
    
            // Guardar la empresa en la base de datos
            $empresa->save();
    
            DB::commit();
            
            // Retornar una respuesta exitosa
            return response()->json([
                'response' => true,
                'data' => $empresa,
                'msg'=> 'Empresa agregada exitosamente'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al agregar la empresa: '.$th
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
            // Buscar la empresa por su ID
            $empresa = Empresa::findOrFail($id);
    
            // Retornar la empresa encontrada
            return response()->json([
                'response' => true,
                'data' => $empresa,
                'msg'=> 'Empresa recuperada exitosamente'
            ]);
        } catch (\Throwable $th) {
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'No se pudo recuperar la empresa: '.$th
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
    public function update(Request $request, $id){
        try {
            DB::beginTransaction();
            
            // Buscar la empresa por su ID
            $empresa = Empresa::findOrFail($id);
    
            // Actualizar los campos de la empresa con los datos del formulario
            $empresa->TIPO_ID = $request->tipo_id;
            $empresa->RAZON_SOCIAL = $request->razon_social;
            $empresa->DIRECCION = $request->direccion;
            $empresa->TELEFONO = $request->telefono;
            $empresa->EMAIL = $request->email;
            $empresa->CONTACTO = $request->contacto;
            $empresa->SECTOR = $request->sector;
            $empresa->NUM_EMPLEADOS = $request->num_empleados;
            
            $empresa->save();
    
            DB::commit();
            
            // Retornar una respuesta exitosa
            return response()->json([
                'response' => true,
                'data' => $empresa,
                'msg'=> 'Empresa actualizada exitosamente'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al actualizar la empresa: '.$th
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy($id){
            try {
                DB::beginTransaction();
                
                // Buscar la empresa por su ID
                $empresa = Empresa::findOrFail($id);
                
                // Eliminar la empresa
                $empresa->delete();

                DB::commit();
                
                // Retornar una respuesta exitosa
                return response()->json([
                    'response' => true,
                    'msg'=> 'Empresa eliminada exitosamente'
                ]);
            } catch (\Throwable $th) {
                DB::rollBack();
                // Manejar errores
                return response()->json([
                    'response' => false,
                    'msg' => 'No se pudo eliminar la empresa: '.$th
                ]);
            }
        }
}
