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
        $planes_aranceles = App\Planes_aranceles::all();
        return view('cuenta.plan_de_tratamiento.registro',compact('result' ,'planes_aranceles'));
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

        return view('cuenta.plan_de_tratamiento.new',compact('result','result2','result3','result4'));
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

       $planes_id=$planes->id;
       $aranceles_id=$request->aranceles;
       foreach($aranceles_id as $id => $value){
           $ids= new App\Planes_aranceles;
           $ids->planes_id=$planes->id;
           $ids->aranceles_id=$value;
           $ids->save();
       }
       $result =  App\PlanesDeTratamientos::all();
       $planes_aranceles = App\Planes_aranceles::all();
       return view('cuenta.plan_de_tratamiento.registro',compact('result' ,'planes_aranceles'));
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
     $result4 =  App\Planes_aranceles::all();
     $planes = App\PlanesDeTratamientos::findOrfail($id);
      return view('cuenta.plan_de_tratamiento.update',compact('planes','result','result2','result3','result4'));
    
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

       $planes_id=$planes->id;
       $aranceles_id=$request->nuevosAranceles;
       if(!is_null($aranceles_id)){
            foreach($aranceles_id as $id => $value){
                $ids= new App\Planes_aranceles;
                $ids->planes_id=$planes->id;
                $ids->aranceles_id=$value;
                $ids->save();
            }
        }
        $arancelesD_id=$request->aranceles;
         if(!is_null($arancelesD_id)){
            foreach($arancelesD_id as $id => $value){
                $ids= new App\Planes_aranceles;
                $ids->planes_id=$planes->id;
                $ids->aranceles_id=$value;
                $ids->delete();
            }
        }


   // vista
        $result =  App\PlanesDeTratamientos::all();
        $planes_aranceles = App\Planes_aranceles::all();
        return view('cuenta.plan_de_tratamiento.registro',compact('result' ,'planes_aranceles'));
   }

   
   public function destroy($id)
   {
        $planes = App\PlanesDeTratamientos::findOrfail($id);
        $planes ->delete();
       // vista
       $result =  App\PlanesDeTratamientos::all();
        $planes_aranceles = App\Planes_aranceles::all();
        return view('cuenta.plan_de_tratamiento.registro',compact('result' ,'planes_aranceles'));
   }

   public function destroyAranceles(Request $request, $id)
   { 
    $planes = App\PlanesDeTratamientos::findOrfail($id);
    $planes_id=$planes->id;
     $arancelesD_id=$request->aranceles;
      if(!is_null($arancelesD_id)){
         foreach($arancelesD_id as $id => $value){
             $ids = App\Planes_aranceles::where('planes_id' , $planes_id);
             $ids->planes_id=$planes->id;
             $ids->aranceles_id=$value;
             $ids->delete();
         }
     }

       // vista
       $result =  App\PlanesDeTratamientos::all();
       $planes_aranceles = App\Planes_aranceles::all();
       return view('cuenta.plan_de_tratamiento.registro',compact('result' ,'planes_aranceles'));
   }


}
