<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
          $result =  App\Pacientes::all();
      return view('pacientes.registro',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
          $result =  App\Pacientes::all();
      return view('pacientes.new',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $NuevoP= new App\Pacientes;
        $NuevoP->pacidentificacion = $request->pacidentificacion;
        $NuevoP->pacnombre = $request->pacnombre;
        $NuevoP->pacapellidoP = $request->pacapellidoP;
        $NuevoP->pacapellidoM = $request->pacapellidoM;  
        $NuevoP->pacfechaN = $request->pacfechaN;
        $NuevoP->pacsexo = $request->pacsexo;
       	$NuevoP->paccorreo = $request->paccorreo;
       	$NuevoP->pactelefono = $request->pactelefono;
        $NuevoP->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
    }
	










    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
          $pacientes =  App\Pacientes::findOrfail($id);
       return view('pacientes.update',compact('pacientes'));
    }
    
    public function showPerfil($id)
    {
          $pacientes =  App\Pacientes::findOrfail($id);
       return view('Perfil.paciente',compact('pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $pacientes = App\Pacientes::findOrfail($id);
        $pacientes->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pacientes = App\Pacientes::findOrfail($id);
        $pacientes ->delete();
        return back();
    }
}
