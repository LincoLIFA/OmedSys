<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
class DescuentosPorCajaController extends Controller
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
        $result =  App\DescuentosPorCaja::all();
      return view('finanzas.descuentos_por_caja.descuentos',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $result =  App\DescuentosPorCaja::all();
      return view('finanzas.descuentos_por_caja.agregardescuentos',compact('result'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       $nuevoDescuento= new App\DescuentosPorCaja;
        $nuevoDescuento->nombre = $request->nombre;
        $nuevoDescuento->descuento = $request->descuento;
        $nuevoDescuento->save();
        $result =  App\DescuentosPorCaja::all();
        return view('finanzas.descuentos_por_caja.descuentos',compact('result'));
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
        $descuentos = App\DescuentosPorCaja::findOrfail($id);
       return view('finanzas.descuentos_por_caja.actualizardescuentos',compact('descuentos'));
     
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
        $descuentos = App\DescuentosPorCaja::findOrfail($id);
        $descuentos ->update($request->all());

    // vista
        $result =  App\DescuentosPorCaja::all();
        return view('finanzas.descuentos_por_caja.descuentos',compact('result'));
    }

    
    public function destroy($id)
    {
        $descuentos = App\DescuentosPorCaja::findOrfail($id);
        $descuentos ->delete();
        // vista
        $result =  App\DescuentosPorCaja::all();
        return view('finanzas.descuentos_por_caja.descuentos',compact('result'));
    }
}
