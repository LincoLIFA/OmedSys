<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
      $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      $result=  App\Citas::all();
      $result1=  App\Citas::all();
      $result2 =  App\Pacientes::all();
      $result3 =  App\Especialistas::all();
      $result4 =  App\Especialidades::all();
       return view('citas.agregarcitas',compact('result','result1','result2','result3','result4'));
    }
    
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        
    $cita = new App\Citas;
    $fecha =$request->citfecha;
    $hora =$request->cithora;

        $cita->citfecha = $request->citfecha;
        $cita->cithora = $request->cithora;
        $cita->citPaciente = $request->citPaciente;
        $cita->citMedico = $request->citMedico;
        $cita->citEsp = $request->citEsp;
        $cita->citEstado = $request->citEstado;
        $cita->citObservaciones = $request->citObservaciones;
        $cita->confirmacion = $request->confirmacion;
        $cita->start = $fecha."T".$hora;
        $cita->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $result =  App\Pacientes::all();
         $result2 =  App\Especialistas::all();
         $result3 =  App\Especialidades::all();
        $cita = App\Citas::findOrfail($id);
       return view('citas.actualizarcitas',compact('cita','result','result2','result3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
     public function showPerfil($citPaciente)
    {
          $pacientes =  App\Citas::findOrfail($citPaciente);
       return view('Perfil.paciente',compact('pacientes'));
    }
    public function update(Request $request, $id)
    {
        $citas = App\Citas::findOrfail($id);
        $citas->update($request->all());
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
        $citas = App\Citas::findOrfail($id);
        $citas ->delete();
         return back();
    }
}
