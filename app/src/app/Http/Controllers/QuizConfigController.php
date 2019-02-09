<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Quiz\QuizQuestion;
use DB;

class QuizConfigController extends Controller
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

    public function listing()
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $questions = $QuizQuestion->get();
        return view('config/listing', ["questions" => $questions]);
    }

    public function edit($id, \Illuminate\Http\Request $request)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        if ($request->post()) {
            $QuizQuestion->where("id", "=", $id)->update(["question" => $request->post("question"),
                "description" => ($request->post("description") ? $request->post("description") : "")]);
            return redirect()->action('QuizConfigController@listing');
        }
        $question = $QuizQuestion->getById($id);

        return view('config/edit', ["question" => $question]);
    }

    public function create(\Illuminate\Http\Request $request)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $max = $QuizQuestion->select(DB::raw("max(`order`) as 'max'"))->get()->first();
        $order = $max["max"] + 1;
        $QuizQuestion->fill(["question" => "", "description" => "", "quiz_id" => 1, "order" => $order]);
        $QuizQuestion->save();
        return $this->edit($QuizQuestion->id, $request);
    }

    public function remove($id)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $question = $QuizQuestion->getById($id);
        if ($question) {
            $QuizQuestion->where("id", "=", $id)->delete();
        }
        return redirect()->action('QuizConfigController@listing');
    }

    public function listingOptions($questionId)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $question = $QuizQuestion->getById($questionId);
        $options = $QuizQuestion->from("quiz_question_options")->where("question_id", "=", $questionId)->get();
        return view('config/options', ["options" => $options, "question" => $question]);
    }

    public function editOption($id, \Illuminate\Http\Request $request)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        if ($request->post()) {
            $QuizQuestion->from("quiz_question_options")->where("id", "=", $id)->update(["option" => $request->post("option"),
                "value" => ($request->post("value") ? $request->post("value") : 0),"is_correct"=>($request->post("is_correct") ? $request->post("is_correct") : 0)]);
            $option = $QuizQuestion->getOptionById($id);
            return redirect()->action('QuizConfigController@listingOptions',["question_id"=>$option->question_id]);
        }
        $option = $QuizQuestion->getOptionById($id);

        return view('config/editOption', ["option" => $option]);
    }

    public function createOption($questionId, \Illuminate\Http\Request $request)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $max = $QuizQuestion->from("quiz_question_options")->where("question_id", "=", $questionId)->select(DB::raw("max(`order`) as 'max'"))->get()->first();
        $order = $max["max"] + 1;
        $QuizQuestion->from("quiz_question_options")->insert(["option" => "", "value" => 0, "is_correct" => 1, "question_id" => $questionId, "order" => $order]);
        $id=DB::getPdo()->lastInsertId();
        return $this->editOption($id, $request);
    }

    public function removeOption($id)
    {
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $option = $QuizQuestion->getOptionById($id);
        if ($option) {
            $QuizQuestion->from("quiz_question_options")->where("id", "=", $id)->delete();
        }
        return redirect()->action('QuizConfigController@listingOptions', ["questionId" => $option->question_id]);
    }

    public function begin()
    {
        session(["active_question" => 0]);

        return $this->nextQuestion();
    }

    public function question(\Illuminate\Http\Request $request)
    {
        $QuizPlayers = new \App\Quiz\QuizPlayer();
        $QuizShow = new \App\Quiz\QuizShow();
        $question = $QuizShow->getQuestion(session("active_question"));
        if (!$question) {
            return;
        }
        $players = $QuizPlayers->getAll();
        $answers = $QuizShow->getAnswers(session("active_question"));
        return view('show/question', ["question" => $question, "answers" => $answers, "players" => $players]);
    }

    public function ajaxAnswers(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $answers = $QuizShow->getAnswers($request->get("question"));
        return $answers;
    }

    public function previousQuestion()
    {
        if (session("active_question") > 1) {
            session(["active_question" => session("active_question") - 1]);
        }
        return redirect("main/question");
    }

    public function nextQuestion()
    {
        session(["active_question" => session("active_question") + 1]);
        $QuizQuestion = new \App\Quiz\QuizQuestion();
        $question = $QuizQuestion->getByPosition(session("active_question"));
        $QuizQuestion->activate($question);
        return redirect("main/question");
    }

    public function answers(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $question = $QuizShow->getQuestion(session("active_question"));
        $answers = $QuizShow->getAnswersScore(session("active_question"));
        return view('show/answers', ["question" => $question, "answers" => $answers]);
    }

    public function score(\Illuminate\Http\Request $request)
    {
        $QuizShow = new \App\Quiz\QuizShow();
        $score = $QuizShow->getScore();
        $question = $QuizShow->getQuestion(session("active_question"));
        return view('show/score', ["question" => $question, "score" => $score]);
    }

}
