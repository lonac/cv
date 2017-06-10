<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
   protected $fillable =['user_id','date','description',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
