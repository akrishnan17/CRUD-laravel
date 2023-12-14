<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
class User extends Authenticable
{
    protected $fillable = [
        'name',
        'dob',
        'email',
        'password',
        'contact',
        'address',
        'pincode',
        'status',
        'state',
    ];



   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
