<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interests extends Model
{
    protected $fillable =['user_id','interest',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
