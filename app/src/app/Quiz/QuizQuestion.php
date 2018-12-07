<?php

namespace App\Quiz;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class QuizQuestion extends Model
{

    protected $table = "quiz_questions";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function getFirstUnanswered()
    {
        $playerLogin = self::where("code", "=", $code)->get()->first();
        if(!$playerLogin){
            return;
        }
        session(['player' => $playerLogin]);
        return $playerLogin;
    }
}
