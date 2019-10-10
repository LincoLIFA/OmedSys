<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        
      $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
    }
    
    // Index de Gestion Financiera 
    public function indexF()
    {
        
      
        return view('finanzas.index');
    }


    
     public function indexE($id)
    {
        $result3 = App\Citas::all();
        $result =  App\Especialistas::all();
        $result2 =  App\Especialidades::all();
        $especialistas = App\Especialistas::findOrfail($id);
       return view('Perfil.especialista',compact('especialistas','result','result2','result3'));
     
    }
    
    public function indexP($id)
    {
   
          $pacientes =  App\Pacientes::findOrfail($id);
       return view('Perfil.paciente',compact('pacientes'));
    }
    
    
     
}
