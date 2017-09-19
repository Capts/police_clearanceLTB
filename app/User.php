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
