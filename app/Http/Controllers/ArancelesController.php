<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class ArancelesController extends Controller
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
        $result =  App\Aranceles::all();
        return view('finanzas.aranceles.aranceles',compact('result'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {   
        $result =  App\Aranceles::all();
        $result2 =  App\Especialistas::all();
        $result3 =  App\Especialidades::all();
       
     return view('finanzas.aranceles.agregar_aranceles',compact('result','result2','result3'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
   public function store(Request $request)
   {
      $aranceles= new App\Aranceles;
       $aranceles->procedimientos = $request->procedimientos;
       $aranceles->precios = $request->precios;
       $aranceles->comentarios = $request->comentarios;
       $aranceles->medico_id = $request->medico_id;
       $aranceles->especialidades_id = $request->especialidades_id;
       $aranceles->save();
       $result =  App\Aranceles::all();
       return view('finanzas.aranceles.aranceles',compact('result'));
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
        $aranceles = App\Aranceles::findOrfail($id);
      return view('finanzas.aranceles.actualizar_aranceles',compact('aranceles','result','result2'));
    
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
       $aranceles = App\Aranceles::findOrfail($id);
       $aranceles ->update($request->all());

   // vista
       $result =  App\Aranceles::all();
       return view('finanzas.aranceles.aranceles',compact('result'));
   }

   
   public function destroy($id)
   {
       $aranceles = App\Aranceles::findOrfail($id);
       $aranceles -> delete();
       
       // vista
       $result =  App\Aranceles::all();
       return view('finanzas.aranceles.aranceles',compact('result'));
   }
}


