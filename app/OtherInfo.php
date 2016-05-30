<?php

namespace HumanResources;

use Illuminate\Database\Eloquent\Model;

class OtherInfo extends Model
{
    protected $fillable = [
        'user_id',
        'phone',
        'marital_status',
        'address',
        'dateofbirth',
        'gender',
        'state',
        'city',
    ];

    public function user()
    {
        return $this->belongsTo('HumanResources\User');
    }
}
