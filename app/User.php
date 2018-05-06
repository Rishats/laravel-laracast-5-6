<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The atrribute throttle incoming requests for Users.
     * 
     * You can use in web.php
     * Route::middleware('throttle:rate_limit,1')->get(....)
     */
    public $rate_limit = 2;

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

    /**
     * Format expires_at - use in tinker $user->toArray();
     *
     * @var array
     */
    protected $casts = [
        'expires_at' => 'date:Y-m-d'
    ];
}
