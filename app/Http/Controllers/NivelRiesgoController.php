<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NivelRiesgo;


class NivelRiesgoController extends Controller
{
    
    public function index()
{
    try {
        // Obtener el último registro de la tabla NIVELES_RIESGO
        $ultimoRegistro = NivelRiesgo::orderBy('ID', 'desc')->first();

        if ($ultimoRegistro) {
            // Definir los valores máximos de los niveles de riesgo
            $valoresMaximos = [
                'NIVEL_RIESGO_1' => 30, 
                'NIVEL_RIESGO_2' => 22, 
                'NIVEL_RIESGO_3' => 22, 
                'NIVEL_RIESGO_4' => 29, 
                'NIVEL_RIESGO_5' => 29, 
            ];

            // Calcular los porcentajes de cada nivel de riesgo
            $porcentajes = [];
            foreach ($valoresMaximos as $nivel => $maximo) {
                $porcentajes[$nivel] = number_format(($ultimoRegistro->$nivel / $maximo) * 100, 2);
            }

            // Pasar los porcentajes a la vista
            return view('nivel_r.index', [
                'porcentajes' => $porcentajes,
                'ultimoRegistro' => $ultimoRegistro
            ]);
        } else {
            // No hay registros en la tabla
            return view('nivel_r.index', [
                'porcentajes' => [],
                'ultimoRegistro' => null
            ]);
        }
    } catch (\Throwable $th) {
        // Manejar errores
        return response()->json([
            'response' => false,
            'msg' => 'Ocurrió un error al recuperar la lista de empresas: ' . $th
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
