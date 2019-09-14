<?php

namespace App\Http\Controllers;


 use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
class EventsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function getEvents(){ 
        
     $events = App\Events::all();
        return response()->json($events); 
    }
    
     public function create(Request $request) {
        $events = new App\Events;        
        $events->title = $request->title;
        $events->description = $request->description;
        $events->classNames = $request->classNames;
        $events->start = $request->start;
        $events->end = $request->end;
        $events->save();
       return back();
    }
} 
        