<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
class EspecialistasController extends Controller
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
         $result =  App\Especialistas::all();
      return view('especialistas.registro',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $result =  App\Especialistas::all();
        $result2 =  App\Especialidades::all();
      return view('especialistas.new',compact('result','result2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $NuevoPro = new App\Especialistas;
        $NuevoPro->rut_med = $request->rut_med;
        $NuevoPro->medidentificacion = $request->medidentificacion;
        $NuevoPro->mednombres = $request->mednombres;
        $NuevoPro->medapellidos = $request->medapellidos;
        $NuevoPro->especialidades_id = $request->especialidades_id;
        $NuevoPro->medtelefono = $request->medtelefono;
        $NuevoPro->medcorreo = $request->medcorreo;
       	
        $NuevoPro->save();
        $result =  App\Especialistas::all();
        return view('especialistas.registro',compact('result'));

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
         $result =  App\Especialistas::all();
        $result2 =  App\Especialidades::all();
         $especialistas = App\Especialistas::findOrfail($id);
       return view('especialistas.update',compact('especialistas','result','result2'));
    }
     
     public function showPerfil($id)
    
    { 
       
        $result =  App\Especialistas::all();
        $result1 = App\Events::all();
        $result2 =  App\Especialidades::all();
        $result3 = App\Citas::all();
        $especialistas = App\Especialistas::findOrfail($id);
       return view('Perfil.especialista',compact('especialistas','result','result1','result2','result3'));
       
       
     
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
        $especialistas = App\Especialistas::findOrfail($id);
        $especialistas->update($request->all());
        $result =  App\Especialistas::all();
      return view('especialistas.registro',compact('result'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $especialistas = App\Especialistas::findOrfail($id);
        $especialistas ->delete();
        $result =  App\Especialistas::all();
        return view('especialistas.registro',compact('result'));
    }
}
