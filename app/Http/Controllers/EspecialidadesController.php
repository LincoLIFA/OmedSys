<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
class EspecialidadesController extends Controller
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
        $result =  App\Especialidades::all();
      return view('especialidades.registro',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $result =  App\Especialidades::all();
      return view('especialidades.new',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $NuevaEsp= new App\Especialidades;
        $NuevaEsp->espNombre = $request->espNombre;
        $NuevaEsp->save();
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
        $especialidades = App\Especialidades::findOrfail($id);
       return view('especialidades.update',compact('especialidades'));
     
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
        $especialidades = App\Especialidades::findOrfail($id);
        $especialidades ->update($request->all());
        return back();
    }

    
    public function destroy($id)
    {
        $especialidades = App\Especialidades::findOrfail($id);
        $especialidades ->delete();
        return back();
    }
}
