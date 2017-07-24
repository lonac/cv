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

    public function referees()
    {
        return $this->hasMany('App\Referees');
    }
    public function researches()
    {
        return $this->hasMany('App\Research');
    }
    public function professionalaffiliations()
    {
        return $this->hasMany('App\Proffesionalaffliation');
    }

    public function awards()
    {
        return $this->hasMany('App\Award');
    }

     public function affiliations()
    {
        return $this->hasMany('App\Affiliations');
    }

     public function jobdescriptions()
    {
        return $this->hasMany('App\Jobdescription');
    }

     public function projects()
    {
        return $this->hasMany('App\Projects');
    }

     public function trainings()
    {
        return $this->hasMany('App\Trainings');
    }

     public function presentations()
    {
        return $this->hasMany('App\Presentations');
    }
     public function activities()
    {
        return $this->hasMany('App\Activities');
    }

    public function phonenumbers()
    {
        return $this->hasMany('App\Phonenumber');
    }

    public function addresses()
    {
        return $this->hasOne('App\Address');
    }

}
