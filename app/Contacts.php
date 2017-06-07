<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $fillable =['user_id','phonenumber','address',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
