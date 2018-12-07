<?php

namespace App\Quiz;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class QuizPlayer extends Model
{

    use Notifiable;

    protected $table = "quiz_players";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'code', 'remember_token'
    ];

    public function loginByCode($code)
    {
        $playerLogin = self::where("code", "=", $code)->get()->first();
        if (!$playerLogin) {
            return;
        }
        session(['player' => $playerLogin]);
        return $playerLogin;
    }

    public function getFirstUnanswered()
    {
        $player = session("player");
        if (!$player) {
            return;
        }
        $query = $this
                ->join("quiz_questions", "quiz_questions.quiz_id", "quizs.id")
                ->leftjoin("quiz_answers", function($join) use ($player) {
                    $join->on('quiz_answers.question_id', '=', 'quiz_questions.id');
                    $join->on('quiz_answers.player_id', '=', DB::RAW("'" . $player->id . "'"));
                })
                ->where("quizs.available", ">=", "1")
                ->whereNull("quiz_answers.player_id")
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

    public function getLastAnswered()
    {
        $player = session("player");
        if (!$player) {
            return;
        }
        $query = $this
                ->join("quiz_questions", "quiz_questions.quiz_id", "quizs.id")
                ->leftjoin("quiz_answers", function($join) use ($player) {
                    $join->on('quiz_answers.question_id', '=', 'quiz_questions.id');
                    $join->on('quiz_answers.player_id', '=', DB::RAW("'" . $player->id . "'"));
                })
                ->where("quizs.available", "=", "1")
                ->whereNotNull("quiz_answers.player_id")
                ->orderBy("quiz_questions.order", "desc")
                ->limit(1)
                ->from("quizs");
        $question = $query->get()->first();
        if (!$question) {
            return;
        }
        $question->options = $this->from("quiz_question_options")->where("question_id", "=", $question->id)->orderBy("order", "asc")->get();

        return $question;
    }

    public function saveAnswer($question_id, $answer_id, $player_id)
    {
        $doesntExists = $this
                ->from("quiz_answers")
                ->where("quiz_answers.question_id", "=", DB::raw("'$question_id'"))
                ->where("quiz_answers.question_option_id", "=", DB::raw("'$answer_id'"))
                ->where("quiz_answers.player_id", "=", DB::raw("'$player_id'"))
                ->doesntExist();
        if ($doesntExists) {
            $a = DB::table('quiz_answers')->insert(
                    ['question_id' => $question_id, 'question_option_id' => $answer_id, 'player_id' => $player_id]
            );
        }
    }

}
