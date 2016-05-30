<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = [
        'user_id',
        'institution',
        'grade',
        'qualification',
        'start-date',
        'end-date',
    ];

    public function user()
    {
        return $this->belongsTo('HumanResources\User');
    }
}
