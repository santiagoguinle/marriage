<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class RSVPAsnwer extends Model
{

    protected $table = "rsvp_answers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname','message','confirm','message'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function saveConfirmed()
    {
        $playerLogin = self::where("code", "=", $code)->get()->first();
        if(!$playerLogin){
            return;
        }
        session(['player' => $playerLogin]);
        return $playerLogin;
    }
    
    public function saveCancellation()
    {
        $playerLogin = self::where("code", "=", $code)->get()->first();
        if(!$playerLogin){
            return;
        }
        session(['player' => $playerLogin]);
        return $playerLogin;
    }
}
