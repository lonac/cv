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
        return $this->hasOne('App\Personaldetails');
    }

    public function olevels()
    {
        return $this->hasOne('App\Olevel');
    }

    public function alevels()
    {
        return $this->hasOne('App\Alevel');
    }
    public function certificatelevels()
    {
        return $this->hasOne('App\Certificatelevel');
    }

    public function diplomalevels()
        {
            return $this->hasOne('App\Diplomalevel');
        }

    public function degreelevels()
        {
            return $this->hasOne('App\Degreelevel');
        }

    public function masterslevels()
        {
            return $this->hasOne('App\Masterslevel');
        }

}
