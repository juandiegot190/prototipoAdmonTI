<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Pacientes;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        if (is_null($request->get('texto'))) {
            $texto = trim($request->get('texto'));
            $pacientes = DB::table('tb_paciente')
                ->select('id_Paciente','no_expediente', 'Nombre_1', 'Nombre_2', 'Apellido_1', 'Apellido_2', 'Direccion', 'Celular_1')
                ->orderBY('Nombre_1')
                ->paginate(6);
        } else {

            $texto = trim($request->get('texto'));
            //$pacientes = Patient::paginate(6);
            $pacientes = DB::table('tb_paciente')
                ->select('id_Paciente','no_expediente', 'Nombre_1', 'Nombre_2', 'Apellido_1', 'Apellido_2', 'Direccion', 'Celular_1')
                ->where('Nombre_1', 'LIKE', '%' . $texto . '%')
                ->orwhere('no_expediente', 'LIKE', '%' . $texto . '%')
                ->orwhere('Nombre_2', 'LIKE', '%' . $texto . '%')
                ->orwhere('Apellido_1', 'LIKE', '%' . $texto . '%')
                ->orwhere('Apellido_2', 'LIKE', '%' . $texto . '%')
                ->orderBY('Nombre_1')
                ->paginate(6);
        }
        return view('Reporte.index', compact('pacientes', 'texto'));
    }



    
    public function show($id)
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
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
    }
}
