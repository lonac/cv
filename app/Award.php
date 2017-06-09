<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
	    protected $fillable =['user_id','time','name',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
