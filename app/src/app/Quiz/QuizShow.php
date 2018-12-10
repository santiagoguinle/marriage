<?php

namespace App\Quiz;

use Illuminate\Database\Eloquent\Model;
use DB;

class QuizShow extends Model
{

    public function loginByCode($code)
    {
        $log = [];
        if ($code == "showman") {
            $log = ["id" => 1, "name" => "showman"];
            session(['showman' => $log]);
        }
        return $log;
    }

    public function getScore()
    {
        $query = $this->from('quizs')
                ->select(DB::raw("min(quiz_players.name) as 'player'"))
                ->addSelect(DB::raw("sum(quiz_question_options.value) as 'score'"))
                ->addSelect(DB::raw("count(quiz_question_options.value) as 'answers'"))
                ->join("quiz_questions", "quiz_questions.quiz_id", "quizs.id")
                ->join("quiz_question_options", 'quiz_questions.id', 'quiz_question_options.question_id')
                ->join("quiz_answers", function($join) {
                    $join->on('quiz_answers.question_id', '=', 'quiz_questions.id');
                    $join->on('quiz_answers.question_option_id', '=', 'quiz_question_options.id');
                })
                ->join("quiz_players", "quiz_answers.player_id", "quiz_players.id")
                ->where("quizs.available", ">=", "1")
                ->orderBy(DB::raw("sum(quiz_question_options.value)"), "desc")
                ->groupBy("quiz_players.id")
                ->get();
        return $query;
    }

    public function getQuestion($qid)
    {
        $query = $this->join("quiz_questions", "quiz_questions.quiz_id", "quizs.id")
                ->where("quizs.available", ">=", "1")
                ->where("quiz_questions.id", "=", $qid)
                ->orderBy("quiz_questions.order", "asc")
                ->limit(1)
                ->from("quizs");
        $question = $query->get()->first();
        if (!$question) {
            return;
        }
        $question->options = $this->from("quiz_question_options")->where("question_id", "=", $question->id)->orderBy("order", "asc")->get();
        return $question;
    }

    public function getAnswers($qid)
    {
        $query = $this->where("quiz_answers.question_id", "=", $qid)
                ->from("quiz_answers");
        return $query->get();
    }

    public function getAnswersScore($qid)
    {
        $query = $this->select("question")
                ->addSelect("option")
                ->addSelect(DB::raw("count(*) as 'selected'"))
                ->addSelect(DB::raw("min(is_correct) as 'is_correct'"))
                ->where("quiz_answers.question_id", "=", $qid)
                ->join("quiz_question_options","quiz_question_options.id","quiz_answers.question_option_id")
                ->join("quiz_questions","quiz_questions.id","quiz_answers.question_id")
                ->from("quiz_answers")
                ->groupBy("question")
                ->groupBy("option");
        return $query->get();
    }
}
