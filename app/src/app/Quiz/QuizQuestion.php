<?php

namespace App\Quiz;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class QuizQuestion extends Model
{
    
    const ACTIVE_NO=0;
    const ACTIVE_YES=1;

    protected $table = "quiz_questions";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'description','quiz_id','order','id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function getById($id)
    {
        return self::where("id", "=", $id)->get()->first();
    }
    public function getOptionById($id)
    {
        return self::from("quiz_question_options")->where("id", "=", $id)->get()->first();
    }
    public function getByPosition($id)
    {
        return self::where("order", "=", $id)->get()->first();
    }
    
    public function activate($question)
    {
        $question->activate = self::ACTIVE_YES;
        self::where("id", "=", $question->id)->update(["active" => self::ACTIVE_YES]);
        return $question;
    }
    public function deactivateAll()
    {
        return self::where("active","=",self::ACTIVE_YES)->update(["active" => self::ACTIVE_NO]);
    }
    
    public function cleanAnswers()
    {
        return DB::table('quiz_answers')->delete();
    }

}
