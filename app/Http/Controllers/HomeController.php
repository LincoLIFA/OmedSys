<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App;
class HomeController extends Controller
{
    use AuthenticatesUsers;
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
        $id = auth()->user()->id;

        if(auth()->user()->hasRole('Admin'))
        {
            $result =  App\Citas::all();
        return view('citas.citas',compact('result'));
        }
        else{
            $result = auth()->user();
            return view('cuenta.index', compact('result'));
         }
      
    }

    /**
     * Retorna gestion finandciera
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexF()
    {
        $id = auth()->user()->id;

        if(auth()->user()->hasRole('Admin'))
        {
            $result =  App\Citas::all();
        return view('finanzas.index',compact('result'));
        }
        else{
            $id = auth()->user->id;
            $result = auth()->user();
            $data = App\Citas::where('medico_id' , $id)->get();
            return view('cuenta.index', compact('result', 'data'));
         }
      
    }
    

     public function indexE($id)
    {
        if(auth()->user()->hasRole('Admin'))
        {
            $result3 = App\Citas::all();
            $result =  App\Especialistas::all();
            $result2 =  App\Especialidades::all();
            $especialistas = App\Especialistas::findOrfail($id);
           return view('Perfil.especialista',compact('especialistas','result','result2','result3'));
        }
        else{
            $id = auth()->user->id;
            $result = auth()->user();
            $data = App\Citas::where('medico_id' , $id)->get();
            return view('cuenta.index', compact('result', 'data'));
         }
        
     
    }
    
    public function indexP($id)
    {
        if(auth()->user()->hasRole('Admin'))
        {
            $pacientes =  App\Pacientes::findOrfail($id);
            return view('Perfil.paciente',compact('pacientes'));
        }
        else{
            $id = auth()->user->id;
            $result = auth()->user();
            $data = App\Citas::where('medico_id' , $id)->get();
            return view('cuenta.index', compact('result', 'data'));
         }

    }
    
    /**
     * Retorna vista de Especialista
     * @param array $user
     * @return response
     */
    private function index_especialista(array $user)
    { 
       
    }
    
    
     
}
