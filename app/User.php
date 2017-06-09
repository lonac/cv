<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personaldetails()
    {
        return $this->hasMany('App\Personaldetails');
    }

    public function olevels()
    {
        return $this->hasMany('App\Olevel');
    }

    public function alevels()
    {
        return $this->hasMany('App\Alevel');
    }
    public function certificatelevels()
    {
        return $this->hasMany('App\Certificatelevel');
    }

    public function diplomalevels()
        {
            return $this->hasMany('App\Diplomalevel');
        }

    public function degreelevels()
        {
            return $this->hasMany('App\Degreelevel');
        }

    public function masterslevels()
        {
            return $this->hasMany('App\Masterslevel');
        }

     public function phdlevels()
        {
            return $this->hasMany('App\Phdlevel');
        }

    public function contacts()
    {
        return $this->hasMany('App\Contacts');
    }

     public function experiences()
    {
        return $this->hasMany('App\Experience');
    }
        public function interests()
    {
        return $this->hasMany('App\Interests');
    }

    public function skills()
    {
        return $this->hasMany('App\Skills');
    }

}
