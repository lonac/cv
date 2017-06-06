<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificatelevel extends Model
{
    protected $fillable =['user_id','colname','remark','cyear',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
