<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'position',
        'job-description',
        'start-date',
        'end-date',
    ];

    public function user()
    {
        return $this->belongsTo('HumanResources\User');
    }
}
