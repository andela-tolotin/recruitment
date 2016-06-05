<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class InterviewInvitee extends Model
{
    protected $fillable = [
        'user_id',
        'interview_id'
    ];
}
