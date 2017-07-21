<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonenumber extends Model
{
    protected $fillable = ['phonenumber','user_id',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
