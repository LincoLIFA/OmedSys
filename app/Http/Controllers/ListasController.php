<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class listasController extends Controller
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
        
      $result =  App\listas::all();
        return view('listas.listas',compact('result'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      $result=  App\listas::all();
      $result1=  App\Events::all();
      $result2 =  App\Pacientes::all();
      $result3 =  App\Especialistas::all();
      $result4 =  App\Especialidades::all();
       return view('listas.agregarlistass',compact('result','result1','result2','result3','result4'));
    }
    
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        
    $listas = new App\listas;


      
        $listas->events_id = $request->events_id;
        $listas->pacientes_id = $request->pacientes_id;
        $listas->medico_id = $request->medico_id;
        $listas->especialidades_id = $request->especialidades_id;
        $listas->citEstado = $request->citEstado;
        $listas->citObservaciones = $request->citObservaciones;
        $listas->confirmacion = $request->confirmacion;
        $listas->save();
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
         $result1 =  App\Events::all();
         $result2 =  App\Especialistas::all();
         $result3 =  App\Especialidades::all();
        $listas = App\listas::findOrfail($id);
       return view('listas.actualizarlistass',compact('listas','result','result1','result2','result3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
     public function showPerfil($pacientes_id)
    {
          $pacientes =  App\listas::findOrfail($pacientes_id);
       return view('Perfil.paciente',compact('pacientes'));
    }
    public function update(Request $request, $id)
    {
        $listas = App\listas::findOrfail($id);
        $listas->update($request->all());
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
        $listas = App\listas::findOrfail($id);
        $listas ->delete();
         return back();
    }
}
