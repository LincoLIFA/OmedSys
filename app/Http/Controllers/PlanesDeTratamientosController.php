<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class PlanesDeTratamientosController extends Controller
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
        $result =  App\PlanesDeTratamientos::all();
        return view('cuenta.plane_de_tratamiento.registro',compact('result'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {    
        $result =  App\PlanesDeTratamientos::all();
        $result2 =  App\Especialistas::all();
        $result3 =  App\Especialidades::all();
        $result4 =  App\Aranceles::all();

        return view('cuenta.plane_de_tratamiento.new',compact('result'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
   public function store(Request $request)
   {
       $planes= new App\PlanesDeTratamientos;
       $planes->nombre = $request->nombre;
       $planes->medico_id = $request->medico_id;
       $planes->especialidades_id = $request->especialidades_id;
       $planes->save();
       $result =  App\PlanesDeTratamientos::all();

       $planes_id=$planes->id;
       $aranceles_id=$request->aranceles;
       foreach($aranceles_id as $id){
           $ids= new App\planes_aranceles;
           $ids->planes_id=$planes_id;
           $ids->aranceles_id=$id;
           $ids->save();
       }
       return view('cuenta.plane_de_tratamiento.registro',compact('result'));
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
    $result3 =  App\Aranceles::all();
    $result4 =  App\planes_aranceles::all();
        $planes = App\PlanesDeTratamientos::findOrfail($id);
      return view('cuenta.plane_de_tratamiento.registro',compact('planes','result','result2','result3','result4'));
    
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
       $planes = App\PlanesDeTratamientos::findOrfail($id);
       $planes ->update($request->all());

   // vista
       $result =  App\PlanesDeTratamientos::all();
       return view('cuenta.plane_de_tratamiento.registro',compact('result'));
   }

   
   public function destroy($id)
   {
       $aranceles = App\Aranceles::findOrfail($id);
       $aranceles ->delete();
       // vista
       $result =  App\Aranceles::all();
       return view('finanzas.aranceles.aranceles',compact('result'));
   }
}
