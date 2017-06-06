<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olevel extends Model
{
    protected $fillable =['user_id','olevname','remark','oyear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
