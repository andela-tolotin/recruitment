<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function role()
    {
        return $this->belongTo('HumanResources\User');
    }
}
