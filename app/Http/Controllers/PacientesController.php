<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Pacientes;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        //$pacientes = Patient::paginate(6);
        $pacientes = DB::table('pacientes')
            ->select('id', 'Nombre_1', 'Nombre_2', 'Apellido_1', 'Apellido_2', 'Direccion', 'Telefono')
            ->where('Nombre_1', 'LIKE', '%' . $texto . '%')
            ->orwhere('Nombre_2', 'LIKE', '%' . $texto . '%')
            ->orwhere('Apellido_1', 'LIKE', '%' . $texto . '%')
            ->orwhere('Apellido_2', 'LIKE', '%' . $texto . '%')
            ->orderBY('Nombre_1')
            ->paginate(6);
        return view('pacientes.index', compact('pacientes', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $results = DB::select('select * from tb_departamento ');

        $depto = DB::select('select ID_DEPARTAMENTO, DEPARTAMENTO from tb_departamento ');
        //$paciente = DB::select("select * from tbl_pacientes inner join"); //name, apellido, id_departamento, id_municipio
        // DB::table('tb_departamento')->select('ID_DEPARTAMENTO', 'DEPARTAMENTO');
        return  view('pacientes.create', compact('depto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name1' => 'required',
            'lastName1' => 'required',
            'genero' => 'required',
            'estadoCivil' => 'required',
            'fechaNacimiento' => 'required',
            'edad' => 'required',
            'accesoIGSS' => 'required',
            'estadoDPI' => 'required',
            'deptoOrigen' => 'required',
            'muniOrigen' => 'required',
            'address' => 'required',
            'zona' => 'required',
            'coloniaBarrioAldea' => 'required',
            'deptoActual' => 'required',
            'muniActual' => 'required',
            'telefonoCasa' => 'required',
            'telefono1' => 'required',

            'nameEncargado' => 'required',
            'lastNameEncargado' => 'required',
            'parentescoGeneral' => 'required',
            'addressGeneral' => 'required',
            'zonaGeneral' => 'required',
            'coloniaBarrioAldeaGeneral' => 'required',

            'deptoActualGeneral' => 'required',
            'muniActualGeneral' => 'required',
            'telefono1General' => 'required',
            'muniActualGeneral' => 'required',

        ]);

        return $request;
        // Blog::create($request->all());

        // return redirect()->route('pacientes.index')
        //     ->with('success', 'Paciente creado correctamente.');
    }

    public function municipiosGet($id)
    {
        $municipiosValues = DB::select("select ID_MUNICIPIO, MUNICIPIO from tb_municipio where ID_DEPARTAMENTO = $id");
     
       return $municipiosValues;
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
        $blog = json_decode("{id:1,title:'pedro',content:'abc@gasd.com'}");
        return view('pacientes.edit', compact('blog'));
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
