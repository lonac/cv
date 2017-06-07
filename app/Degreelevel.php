<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degreelevel extends Model
{
   protected $fillable =['user_id','uniname','program','dgyear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
