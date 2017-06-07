<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplomalevel extends Model
{
    protected $fillable =['user_id','colname','program','dyear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
