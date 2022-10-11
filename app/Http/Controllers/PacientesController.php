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
        $texto =trim($request->get('texto'));
        //$pacientes = Patient::paginate(6);
        $pacientes=DB::table('pacientes')
                    ->select('id','primer_Nombre','segundo_Nombre','primer_Apellido','segundo_Apellido','Direccion','Telefono')
                    ->where('primer_Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('segundo_Nombre','LIKE','%'.$texto.'%')
                    ->orwhere('primer_Apellido','LIKE','%'.$texto.'%')
                    ->orwhere('segundo_Apellido','LIKE','%'.$texto.'%')
                    ->orderBY('primer_Nombre')
                    ->paginate(6);
        return view('pacientes.index',compact('pacientes','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
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

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente creado correctamente.');
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