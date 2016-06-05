<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'date',
        'code',
    ];
}
