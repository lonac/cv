<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaldetails extends Model
{
    protected $fillable = ['firstname','lastname','user_id','
    middlename','nationality','birthdate',];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
