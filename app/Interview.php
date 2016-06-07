<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'date',
        'code',
        'type',
        'description',
    ];

    public function interviewCriterias()
    {
        return $this->hasMany('HumanResources\InterviewCriteria');
    }
}
