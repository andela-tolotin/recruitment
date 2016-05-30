<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo('HumanResources\User');
    }
}
