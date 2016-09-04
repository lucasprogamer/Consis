<?php

namespace App;
use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  use HasDefender;
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


    public function profile()
    {
        return $this->hasOne('App\Models\profile');
    }

    public function authores()
    {
        return $this->hasMany('App\Models\authores');
    }

    public function submissoes()
    {
        return $this->hasMany('App\Models\submissoes');
    }
}
