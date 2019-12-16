<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use App;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('Perfil.admin');
    }

    public function show()
    {
        $data = Auth::user()->id;
        $user =  App\Users::findOrfail($data);
        return view('Perfil.admin',compact('user'));
    }

    public function update(Request $request, $id)
    {
       
        $user = App\User::findOrfail($id);
        $user->avatar=$request->file('avatar')->store('public');
        $user->update();
        $result =  App\User::all();
        return view('Perfil.admin',compact('result'));
    }
}