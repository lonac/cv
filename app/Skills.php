<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
   protected $fillable =['user_id','skillname','description',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
