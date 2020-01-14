<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;
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
        $sql = App\Events::all();
      $result =  App\Citas::all();
        return view('citas.citas',compact('result' , 'sql'));
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
        $hora1 = strtotime ( '+1 hour' , strtotime ($hora) ) ;

        $events->title = "RESERVA";
        $events->description = "Evento de reserva";
        $events->classNames = "No-confirmado";
        $events->start =  $fecha."T".$hora;
        $events->end = $fecha."T".$hora1;
        $events->save();



        $cita = new App\Citas;
        $cita->events_id =  $events->id;
        $cita->paciente_id = $request->pacientes_id;
        $cita->medico_id = $request->especialistas_id;
        $cita->especialidades_id = $request->citEsp;
        $cita->estado = $request->citEstado;
        $cita->observaciones= $request->citObservaciones;
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
        $events =  App\Events::where('events.id','citas.events_id');

        $fecha =$request->citfecha;
        $hora =$request->cithora;
        $hora1 = strtotime ( '+1 hour' , strtotime ($hora) ) ;

        $events->start =  $fecha."T".$hora;
        $events->end = $fecha."T".$hora1;
        $events->update();

        $cita->events_id =  $events->id;
        $cita->paciente_id = $request->pacientes_id;
        $cita->medico_id = $request->especialistas_id;
        $cita->especialidades_id = $request->citEsp;
        $cita->estado = $request->citEstado;
        $cita->observaciones= $request->citObservaciones;
        $cita->confirmacion = $request->confirmacion;
        $citas->update();
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

    public function index_especialista()
    {
        $id = auth()->user()->id;
        $result = App\Citas::where('medico_id', 1 and 'estado', 'Confirmado')->get();
        return view('cuenta.citas.citas',compact('result'));
    }
    
    public function sesiones_especialista()
    {
        $id = auth()->user()->id;
        $result = App\Citas::where('medico_id', 1 and 'estado', 'Confirmado')->get();
        return view('cuenta.citas.sesiones',compact('result'));
    
    }
    
}
