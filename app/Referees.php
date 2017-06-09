<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referees extends Model
{
    protected $fillable =['user_id','refaname','title','address',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
