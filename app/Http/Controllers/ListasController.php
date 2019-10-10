<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
class ListasController extends Controller
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
        
      $result =  App\Listas::all();
        return view('lista.lista',compact('result'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      $result=  App\Listas::all();
      $result1=  App\Listas::all();
      $result2 =  App\Pacientes::all();
      $result3 =  App\Especialistas::all();
      $result4 =  App\Especialidades::all();
       return view('lista.agregarlista',compact('result','result1','result2','result3','result4'));
    }
    
    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) 
    {
        
    $lista = new App\Listas;
    $fecha =$request->lisfecha;
    $hora =$request->lishora;

        $lista->lisfecha = $request->lisfecha;
        $lista->lishora = $request->lishora;
        $lista->lisPaciente = $request->lisPaciente;
        $lista->lisMedico = $request->lisMedico;
        $lista->lisEsp = $request->lisEsp;
        $lista->lisEstado = $request->lisEstado;
        $lista->lisObservaciones = $request->lisObservaciones;
        $lista->confirmacion = $request->confirmacion;
        $lista->start = $fecha."T".$hora;
        $lista->save();
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
        $lista = App\Listas::findOrfail($id);
       return view('lista.actualizarlista',compact('lista','result','result2','result3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
     public function showPerfilL($lisPaciente)
    {
          $pacientes =  App\Listas::findOrfail($lisPaciente);
       return view('Perfil.paciente',compact('pacientes'));
    }
    public function update(Request $request, $id)
    {
        $lista = App\Listas::findOrfail($id);
        $lista->update($request->all());
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
        $lista = App\Listas::findOrfail($id);
        $lista ->delete();
         return back();
    }
}
