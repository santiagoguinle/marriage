<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class GameShowController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('guest')->except('logout');
    }

    public function question(\Illuminate\Http\Request $request)
    {    
        return view('show/question');
    }
    public function answers(\Illuminate\Http\Request $request)
    {    
        return view('show/answers');
    }
    public function score(\Illuminate\Http\Request $request)
    {    
        return view('show/score');
    }
    
    public function playerLogin(\Illuminate\Http\Request $request)
    {    
        if($request->get("name")== "skywalker"){
            return redirect("play/question");
        }else{
            return view('player/main');
        }
    }
    
    public function playerQuestion(\Illuminate\Http\Request $request)
    {    
        return view('player/question');
    }
    
    public function playerAnswer(\Illuminate\Http\Request $request)
    {    
        return view('player/answer');
    }

}
