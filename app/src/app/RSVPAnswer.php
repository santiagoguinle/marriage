<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use DB;

class RSVPAnswer extends Model
{

    protected $table = "rsvp_answers";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'lastname','image','diet'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function saveConfirmed($name,$lastname,$diet,$image)
    {
        return DB::table('invites_confirmations')->insert(
                    ['name' => $name, 'lastname' => $lastname, 'diet'=> $diet,'image'=>$image]
            );
    }
    
    public function saveCancellation($message)
    {
        return DB::table('invites_cancellations')->insert(
                    ['message' => $message]
            );
    }
    public function getAllConfirmed(){
        return $this->from("invites_confirmations")->get();
    }
    public function getAllCancelled(){
        return $this->from("invites_cancellations")->get();
    }
}
