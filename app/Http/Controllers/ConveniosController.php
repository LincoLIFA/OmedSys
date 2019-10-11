<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class ConveniosController extends Controller
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
       $result =  App\Convenios::all();
       
      return view('finanzas.convenios.convenios',compact('result'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
      $result =  App\Convenios::all();
     return view('finanzas.convenios.agregarconvenios',compact('result'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
   public function store(Request $request)
   {
      $NuevoConvenio= new App\Convenios;
      $NuevoConvenio->fecha = $request->fecha;
      $NuevoConvenio->empresa = $request->empresa;
      $NuevoConvenio->descuento = $request->descuento;
      $NuevoConvenio->observacion = $request->observacion;
      $NuevoConvenio->contacto = $request->contacto;
       $NuevoConvenio->save();
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
       $convenios = App\Convenios::findOrfail($id);
       
        return view('finanzas.convenios.actualizarconvenios',compact('convenios'));
    
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
       $convenios = App\Convenios::findOrfail($id);
       $convenios ->update($request->all());
       return back();
   }

   
   public function destroy($id)
   {
       $convenios = App\Convenios::findOrfail($id);
       $convenios ->delete();
       return back();
   }
}


