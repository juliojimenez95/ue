<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Models\Cuestionario;
use App\Models\NivelRiesgo;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Storage;

class CuestionarioController extends Controller
{

    public function index()
    {
        try {
            // Recuperar todas las empresas
            $roles = Cuestionario::all();

            // Retornar la lista de empresas
            return view('cuestionario.index');
        } catch (\Throwable $th) {
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al recuperar la lista de empresas: ' . $th
            ]);
        }
    }

    public function get()
    {
        try {
            $cuestionarios = Cuestionario::with(['usuario', 'empresa'])->get();
    
            return response()->json([
                'response' => true,
                'data' => $cuestionarios,
                'msg' => 'Encuestas encontradas'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error, inténtelo nuevamente: ' . $th->getMessage()
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
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $id = session('session');
            $id_empre = User::find($id);
            $contador_ra = 0;
            $contador_pi = 0;
            $contador_su = 0;
            $contador_fu = 0;
            $contador_a = 0;
            if ($request->RESP_1 == 0) {
                $contador_ra += 2;
                $contador_pi += 3;
                $contador_su += 3;
                $contador_fu += 2;
                $contador_a += 3;

            }

            if ($request->RESP_2 == 0) {
                $contador_ra += 2;
                $contador_pi += 2;
                $contador_su += 2;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_3 == 0) {
                $contador_ra += 3;
                $contador_a += 2;

            }

            if ($request->RESP_4 == 0) {
                $contador_ra += 3;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_5 == 0) {
                $contador_ra += 2;
                $contador_a += 1;

            }

            if ($request->RESP_6 == 0) {
                $contador_ra += 2;
                $contador_pi += 2;
                $contador_su += 2;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_7 == 0) {
                $contador_ra += 1;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_8 == 0) {
                $contador_ra += 3;
                $contador_pi += 3;
                $contador_su += 3;
                $contador_fu += 3;
                $contador_a += 3;

            }

            if ($request->RESP_9 == 0) {
                $contador_ra += 1;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_10 == 0) {

                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_11 == 0) {

                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_12 == 0) {

                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_13 == 0) {
                $contador_ra += 3;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_14 == 0) {
                $contador_ra += 2;
                $contador_pi += 2;
                $contador_su += 2;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_15 == 0) {
                $contador_ra += 1;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 1;
                $contador_a += 1;

            }

            if ($request->RESP_16 == 0) {
                $contador_ra += 2;
                $contador_pi += 2;
                $contador_su += 2;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_17 == 0) {
                $contador_fu += 4;

            }

            if ($request->RESP_18 == 0) {
                $contador_ra += 2;
                $contador_pi += 2;
                $contador_su += 2;
                $contador_fu += 2;
                $contador_a += 2;

            }

            if ($request->RESP_19 == 0) {
                $contador_ra += 1;
                $contador_pi += 1;
                $contador_su += 1;
                $contador_fu += 1;
                $contador_a += 1;

            }

            // Crear una nueva instancia de NivelRiesgo
            $nivelRiesgo = new NivelRiesgo();
            $nivelRiesgo->ID_EMPRESA = $id_empre->ID_EMPRESA;
            $nivelRiesgo->NIVEL_RIESGO_1 = $contador_ra;
            $nivelRiesgo->NIVEL_RIESGO_2 = $contador_pi;
            $nivelRiesgo->NIVEL_RIESGO_3 = $contador_su;
            $nivelRiesgo->NIVEL_RIESGO_4 = $contador_fu;
            $nivelRiesgo->NIVEL_RIESGO_5 = $contador_a;
            $nivelRiesgo->FECHA_ACTUALIZACION = $request->FECHA;

            // Guardar la instancia en la base de datos
            $nivelRiesgo->save();

            //almacenamiento de archivos o evidencias 
            $name_e1 = '';


            if ($request->file('EVIDENCIA_1')) {

                $pdf = $request->file('EVIDENCIA_1');
                $ext = $pdf->getClientOriginalExtension();
                $name_e1 = 'EVIDENCIA_1' . '_' . date('Y') . '-' . date('m') . '-' . date('d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e1, file_get_contents($pdf));
            }

            $name_e2 = '';


            if ($request->file('EVIDENCIA_2')) {

                $pdf = $request->file('EVIDENCIA_2');
                $ext = $pdf->getClientOriginalExtension();
                $name_e2 = 'EVIDENCIA_2' . '_' . date('Y') . '-' . date('m') . '-' . date('d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e2, file_get_contents($pdf));
            }

            $name_e3 = '';


            if ($request->file('EVIDENCIA_3')) {

                $pdf = $request->file('EVIDENCIA_3');
                $ext = $pdf->getClientOriginalExtension();
                $name_e3 = 'EVIDENCIA_3' . '_' . date('Y') . '-' . date('m') . '-' . date('d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e3, file_get_contents($pdf));
            }

            $name_e4 = '';
            if ($request->file('EVIDENCIA_4')) {
                $pdf = $request->file('EVIDENCIA_4');
                $ext = $pdf->getClientOriginalExtension();
                $name_e4 = 'EVIDENCIA_4_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e4, file_get_contents($pdf));
            }

            $name_e5 = '';
            if ($request->file('EVIDENCIA_5')) {
                $pdf = $request->file('EVIDENCIA_5');
                $ext = $pdf->getClientOriginalExtension();
                $name_e5 = 'EVIDENCIA_5_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e5, file_get_contents($pdf));
            }

            $name_e6 = '';
            if ($request->file('EVIDENCIA_6')) {
                $pdf = $request->file('EVIDENCIA_6');
                $ext = $pdf->getClientOriginalExtension();
                $name_e6 = 'EVIDENCIA_6_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e6, file_get_contents($pdf));
            }

            $name_e7 = '';
            if ($request->file('EVIDENCIA_7')) {
                $pdf = $request->file('EVIDENCIA_7');
                $ext = $pdf->getClientOriginalExtension();
                $name_e7 = 'EVIDENCIA_7_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e7, file_get_contents($pdf));
            }

            $name_e8 = '';
            if ($request->file('EVIDENCIA_8')) {
                $pdf = $request->file('EVIDENCIA_8');
                $ext = $pdf->getClientOriginalExtension();
                $name_e8 = 'EVIDENCIA_8_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e8, file_get_contents($pdf));
            }

            $name_e9 = '';
            if ($request->file('EVIDENCIA_9')) {
                $pdf = $request->file('EVIDENCIA_9');
                $ext = $pdf->getClientOriginalExtension();
                $name_e9 = 'EVIDENCIA_9_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e9, file_get_contents($pdf));
            }

            $name_e10 = '';
            if ($request->file('EVIDENCIA_10')) {
                $pdf = $request->file('EVIDENCIA_10');
                $ext = $pdf->getClientOriginalExtension();
                $name_e10 = 'EVIDENCIA_10_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e10, file_get_contents($pdf));
            }

            $name_e11 = '';
            if ($request->file('EVIDENCIA_11')) {
                $pdf = $request->file('EVIDENCIA_11');
                $ext = $pdf->getClientOriginalExtension();
                $name_e11 = 'EVIDENCIA_11_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e11, file_get_contents($pdf));
            }

            $name_e12 = '';
            if ($request->file('EVIDENCIA_12')) {
                $pdf = $request->file('EVIDENCIA_12');
                $ext = $pdf->getClientOriginalExtension();
                $name_e12 = 'EVIDENCIA_12_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e12, file_get_contents($pdf));
            }

            $name_e13 = '';
            if ($request->file('EVIDENCIA_13')) {
                $pdf = $request->file('EVIDENCIA_13');
                $ext = $pdf->getClientOriginalExtension();
                $name_e13 = 'EVIDENCIA_13_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e13, file_get_contents($pdf));
            }

            $name_e14 = '';
            if ($request->file('EVIDENCIA_14')) {
                $pdf = $request->file('EVIDENCIA_14');
                $ext = $pdf->getClientOriginalExtension();
                $name_e14 = 'EVIDENCIA_14_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e14, file_get_contents($pdf));
            }

            $name_e15 = '';
            if ($request->file('EVIDENCIA_15')) {
                $pdf = $request->file('EVIDENCIA_15');
                $ext = $pdf->getClientOriginalExtension();
                $name_e15 = 'EVIDENCIA_15_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e15, file_get_contents($pdf));
            }

            $name_e16 = '';
            if ($request->file('EVIDENCIA_16')) {
                $pdf = $request->file('EVIDENCIA_16');
                $ext = $pdf->getClientOriginalExtension();
                $name_e16 = 'EVIDENCIA_16_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e16, file_get_contents($pdf));
            }

            $name_e17 = '';
            if ($request->file('EVIDENCIA_17')) {
                $pdf = $request->file('EVIDENCIA_17');
                $ext = $pdf->getClientOriginalExtension();
                $name_e17 = 'EVIDENCIA_17_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e17, file_get_contents($pdf));
            }

            $name_e18 = '';
            if ($request->file('EVIDENCIA_18')) {
                $pdf = $request->file('EVIDENCIA_18');
                $ext = $pdf->getClientOriginalExtension();
                $name_e18 = 'EVIDENCIA_18_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e18, file_get_contents($pdf));
            }

            $name_e19 = '';
            if ($request->file('EVIDENCIA_19')) {
                $pdf = $request->file('EVIDENCIA_19');
                $ext = $pdf->getClientOriginalExtension();
                $name_e19 = 'EVIDENCIA_19_' . date('Y-m-d') . '-' . uniqid() . '.' . $ext;
                $url = Storage::disk('documentos')->put($name_e19, file_get_contents($pdf));
            }

            // Crear una nueva instancia de Cuestionario con los datos del formulario
            $cuestionario = new Cuestionario([
                'FECHA' => $request->FECHA,
                'ID_USUARIO' => $id,
                'ID_EMPRESA' => $id_empre->ID_EMPRESA,
                'RESP_1' => $request->RESP_1,
                'EVIDENCIA_1' => $name_e1,
                'RESP_2' => $request->RESP_2,
                'EVIDENCIA_2' => $name_e2,
                'RESP_3' => $request->RESP_3,
                'EVIDENCIA_3' => $name_e3,
                'RESP_4' => $request->RESP_4,
                'EVIDENCIA_4' => $name_e4,
                'RESP_5' => $request->RESP_5,
                'EVIDENCIA_5' => $name_e5,
                'RESP_6' => $request->RESP_6,
                'EVIDENCIA_6' => $name_e6,
                'RESP_7' => $request->RESP_7,
                'EVIDENCIA_7' => $name_e7,
                'RESP_8' => $request->RESP_8,
                'EVIDENCIA_8' => $name_e8,
                'RESP_9' => $request->RESP_9,
                'EVIDENCIA_9' => $name_e9,
                'RESP_10' => $request->RESP_10,
                'EVIDENCIA_10' => $name_e10,
                'RESP_11' => $request->RESP_11,
                'EVIDENCIA_11' => $name_e11,
                'RESP_12' => $request->RESP_12,
                'EVIDENCIA_12' => $name_e12,
                'RESP_13' => $request->RESP_13,
                'EVIDENCIA_13' => $name_e13,
                'RESP_14' => $request->RESP_14,
                'EVIDENCIA_14' => $name_e14,
                'RESP_15' => $request->RESP_15,
                'EVIDENCIA_15' => $name_e15,
                'RESP_16' => $request->RESP_16,
                'EVIDENCIA_16' => $name_e16,
                'RESP_17' => $request->RESP_17,
                'EVIDENCIA_17' => $name_e17,
                'RESP_18' => $request->RESP_18,
                'EVIDENCIA_18' => $name_e18,
                'RESP_19' => $request->RESP_19,
                'EVIDENCIA_19' => $name_e19,
            ]);

            // Guardar el cuestionario en la base de datos
            $cuestionario->save();

            $cuestionarios = Cuestionario::all();


            DB::commit();

            // Retornar una respuesta exitosa
            return response()->json([
                'response' => true,
                'data' => $cuestionarios,
                'msg' => 'Cuestionario agregado exitosamente'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al agregar el cuestionario: ' . $th
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // Recuperar todas las empresas
            $cuestionario = Cuestionario::find($id);
            $cuestionario->EVIDENCIA_1 = url('documentos/' . $cuestionario->EVIDENCIA_1);
            $cuestionario->EVIDENCIA_2 = url('documentos/' . $cuestionario->EVIDENCIA_2);

            $cuestionario->EVIDENCIA_3 = url('documentos/' . $cuestionario->EVIDENCIA_3);
            $cuestionario->EVIDENCIA_4 = url('documentos/' . $cuestionario->EVIDENCIA_4);
            $cuestionario->EVIDENCIA_5 = url('documentos/' . $cuestionario->EVIDENCIA_5);
            $cuestionario->EVIDENCIA_6 = url('documentos/' . $cuestionario->EVIDENCIA_6);
            $cuestionario->EVIDENCIA_7 = url('documentos/' . $cuestionario->EVIDENCIA_7);
            $cuestionario->EVIDENCIA_8 = url('documentos/' . $cuestionario->EVIDENCIA_8);
            $cuestionario->EVIDENCIA_9 = url('documentos/' . $cuestionario->EVIDENCIA_9);
            $cuestionario->EVIDENCIA_10 = url('documentos/' . $cuestionario->EVIDENCIA_10);
            $cuestionario->EVIDENCIA_11 = url('documentos/' . $cuestionario->EVIDENCIA_11);
            $cuestionario->EVIDENCIA_12 = url('documentos/' . $cuestionario->EVIDENCIA_12);
            $cuestionario->EVIDENCIA_13 = url('documentos/' . $cuestionario->EVIDENCIA_13);
            $cuestionario->EVIDENCIA_14 = url('documentos/' . $cuestionario->EVIDENCIA_14);
            $cuestionario->EVIDENCIA_15 = url('documentos/' . $cuestionario->EVIDENCIA_15);
            $cuestionario->EVIDENCIA_16 = url('documentos/' . $cuestionario->EVIDENCIA_16);
            $cuestionario->EVIDENCIA_17 = url('documentos/' . $cuestionario->EVIDENCIA_17);
            $cuestionario->EVIDENCIA_18 = url('documentos/' . $cuestionario->EVIDENCIA_18);
            $cuestionario->EVIDENCIA_19 = url('documentos/' . $cuestionario->EVIDENCIA_19);


            // Retornar la lista de empresas
            return response()->json([
                'response' => true,
                'data' => $cuestionario,
                'msg' => 'Encuesta encontrada'
            ]);
        } catch (\Throwable $th) {
            // Manejar errores
            return response()->json([
                'response' => false,
                'msg' => 'Ocurrió un error al recuperar la lista de empresas: ' . $th
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
