<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
class FichaController extends Controller
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
      $result1=  App\Events::all();
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

        $events = new App\Events;
        $fecha =$request->citfecha;
        $hora =$request->cithora;
        

        $events->title = $request->title;
        $events->description = $request->description;
        $events->classNames = "No-confirmado";
        $events->start =  $fecha+"T"+$hora;
        $events->save();



        $cita = new App\Citas;
        $cita->events_id = $request->events_id;
        $cita->paciente_id = $request->paciente_id;
        $cita->medico_id = $request->medico_id;
        $cita->especialidades_id = $request->especialidades_id;
        $cita->citEstado = $request->citEstado;
        $cita->citObservaciones = $request->citObservaciones;
        $cita->confirmacion = $request->confirmacion;
        $cita->save();
        $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
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
         $result =  App\Pacientes::all();
         $result1 =  App\Events::all();
         $result2 =  App\Especialistas::all();
         $result3 =  App\Especialidades::all();
        $cita = App\Citas::findOrfail($id);
       return view('citas.actualizarcitas',compact('cita','result','result1','result2','result3'));
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
        $citas = App\Citas::findOrfail($id);
        $citas->update($request->all());
        $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
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
        $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
    }

    public function perfil_vista_paciente()
    {
        $id = auth()->user()->id;
        $result = App\Citas::where('medico_id', 1 and 'estado', 'Confirmado')->get();
        return view('cuenta.pacientes.registro',compact('result'));
    }
    
    public function Perfil_paciente_especialista($id)
    {
        $results = DB::select('select * from citas join pacientes where citas.paciente_id = pacientes.id');
        $ficha = App\Fichas::all();
        $result1 = App\Citas::where('paciente_id', 1)->get();
        $result2 =  App\Especialistas::all();
        $result4 =  App\Aranceles::all();
        $result3 =  App\Especialidades::all();
        $result  =  App\Pacientes::findOrfail($id);
      return view('cuenta.fichamedica.fichamedica',compact('ficha','result1','result','result2','result3','result4'));
    
    }
    
}