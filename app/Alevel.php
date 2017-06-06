<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alevel extends Model
{
    protected $fillable =['user_id','alevname','remark','ayear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
