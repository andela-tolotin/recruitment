<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class InterviewCriteria extends Model
{
    protected $fillable = ['interview_id', 'name', 'description', 'weight'];

    public function interview()
    {
        return $this->belongsTo('HumanResources\Interview');
    }
}
