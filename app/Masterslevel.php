<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterslevel extends Model
{
    protected $fillable =['user_id','uniname','program','myear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
