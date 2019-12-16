<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
class OpcionesDePagoController extends Controller
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
        $result =  App\OpcionesDePago::all();
      return view('finanzas.metodos_pago.metodos',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $result =  App\OpcionesDePago::all();
      return view('finanzas.metodos_pago.agregarmetodos',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $nuevoMetodo= new App\OpcionesDePago;
        $nuevoMetodo->nombre = $request->nombre;
        $nuevoMetodo->descuento = $request->descuento;
        $nuevoMetodo->save();
        $result =  App\OpcionesDePago::all();
        return view('finanzas.metodos_pago.metodos',compact('result'));
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
        $descuentos = App\OpcionesDePago::findOrfail($id);
       return view('finanzas.metodos_pago.actualizarmetodos',compact('descuentos'));
     
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
        $descuentos = App\OpcionesDePago::findOrfail($id);
        $descuentos ->update($request->all());

    // vista
        $result =  App\OpcionesDePago::all();
        return view('finanzas.metodos_pago.metodos',compact('result'));
    }

    
    public function destroy($id)
    {
        $descuentos = App\OpcionesDePago::findOrfail($id);
        $descuentos ->delete();
        // vista
        $result =  App\OpcionesDePago::all();
        return view('finanzas.metodos_pago.metodos',compact('result'));
    }
}


