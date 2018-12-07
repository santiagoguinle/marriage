<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class QuizShowController extends Controller
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
}
