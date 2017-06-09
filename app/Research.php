<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable =['user_id','name','description',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
