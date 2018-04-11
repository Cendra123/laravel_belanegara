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

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];


    // protected $table = 'user';
    public $timestamps = false;

    protected $fillable = [
        'username',
        // 'email',
         'password',
         'is_admin',
         'is_approved',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','id'
    ];
}
