<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    
    public function roles(){
        return $this
        ->belongsToMany('App\Role')->withTimestamps();
    }


    public function profile(){
        return $this
        ->hasOne('App\Profile');
    }

    public function mother(){
        return $this
        ->hasOne('App\Mother');
    }

    public function father(){
        return $this
        ->hasOne('App\Father');
    }

    public function contact(){
        return $this
        ->hasOne('App\Contact');
    }
    public function other(){
        return $this
        ->hasOne('App\Other');
    }

    public function application(){
        return $this->hasMany('App\Application');
    }






    protected $fillable = [
        'firstname','lastname', 'email', 'password', 'slug', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
