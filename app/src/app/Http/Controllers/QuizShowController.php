<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Quiz\QuizShow;

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
        $activeQuestion = session("active_question");
        if(!$activeQuestion){
            $activeQuestion=1;
        }
        session(["active_question" => $activeQuestion]);
    }

    public function question(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $question = $QuizShow->getQuestion(session("active_question"));
        $answers = $QuizShow->getAnswers(session("active_question"));
        return view('show/question', ["question" => $question, "answers" => $answers]);
    }

    public function ajaxAnswers(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $answers = $QuizShow->getAnswers($request->get("question"));
        return $answers;
    }
    
    public function nextQuestion()
    {
        session(["active_question" => session("active_question") + 1]);
        return redirect("main/question");
    }

    public function answers(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $question = $QuizShow->getQuestion(session("active_question"));
        $answers = $QuizShow->getAnswersScore(session("active_question"));
        session(["active_question"=>session("active_question")+1]);
        return view('show/answers', ["question" => $question, "answers" => $answers]);
    }

    public function score(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $score = $QuizShow->getScore();
        return view('show/score', ["score" => $score]);
    }

}
