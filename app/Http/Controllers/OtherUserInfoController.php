<?php

namespace HumanResources\Http\Controllers;

use Auth;
use Cloudder;
use Illuminate\Http\Request;
use HumanResources\Http\Requests\UserSignupRequest;
use HumanResources\OtherInfo;
use Validator;

class OtherUserInfoController extends Controller
{
    public function updateOtherUserInfo(array $data)
    {
        $otherUserInfo = OtherInfo::create([
            'phone'          => $data['phone'],
            'marital_status' => $data['marital_status'],
            'address'        => $data['address'],
            'dateofbirth'    => $data['dateofbirth'],
            'gender'         => $data['gender'],
            'state'          => $data['state'],
            'city'           => $data['city'],
            'user_id'        => $data['user_id'],
        ]);

        if (!is_null($otherUserInfo)) {
            return true;
        }

        return false;    
    }
}
