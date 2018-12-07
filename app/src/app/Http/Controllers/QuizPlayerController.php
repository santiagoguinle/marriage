<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Quiz\QuizPlayer;

class QuizPlayerController extends Controller
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
        $this->middleware('guest')->except('logout');
    }
    
    public function doLogin(\Illuminate\Http\Request $request)
    {   
        if ($request->post("code")) {
            $QuizPlayer = new QuizPlayer();
            $player = $QuizPlayer->loginByCode($request->post("code"));
            if ($player->id>0) {
                return redirect("play/question");
            }
        }
        return redirect("play/login");
    }
    
    public function login(\Illuminate\Http\Request $request)
    {   
        $player = session("player");
        if($player){
            return redirect("play/question");
        }
        return view('player/main');
    }
    
    public function question(\Illuminate\Http\Request $request)
    {
        $QuizPlayer = new QuizPlayer();
        $question = $QuizPlayer->getFirstUnanswered();
        if(!$question){
            return redirect("play/answer");
        }
        return view('player/question', ["player" => session("player"), "question" => $question]);
    }
    
    public function saveAnswer(\Illuminate\Http\Request $request)
    {   
        $QuizPlayer = new QuizPlayer();
        $question_id = $request->post("question");
        $answer_id = $request->post("choice");
        if (empty($question_id) or empty($answer_id)) {
            return redirect("play/question");
        }
        $player = session("player");
        $QuizPlayer->saveAnswer($question_id, $answer_id, $player->id);
        return redirect("play/answer");
    }
    
    public function answer(\Illuminate\Http\Request $request)
    {   
        $QuizPlayer = new QuizPlayer();
        $question = $QuizPlayer->getLastAnswered();
        return view('player/answer', ["player" => session("player"), "question" => $question]);
    }

}
