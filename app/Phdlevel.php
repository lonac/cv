<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phdlevel extends Model
{
   protected $fillable =['user_id','uniname','program','pyear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
