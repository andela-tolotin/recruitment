<?php

namespace HumanResources;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'picture_url',
        'role_id',
        'remember_token',
        'provider_id',
        'provider',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->hasOne('HumanResources\Role');
    }

    public function skills()
    {
        return $this->hasMany('HumanResources\Skill');
    }

    public function otherinfo()
    {
        return $this->hasOne('HumanResources\OtherInfo');
    }

    public function academics()
    {
        return $this->hasMany('HumanResources\Academic');
    }
}
