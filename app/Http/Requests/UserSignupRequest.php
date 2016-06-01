<?php

namespace HumanResources\Http\Requests;

class UserSignupRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = null;
        
        $otherUserInfo = Auth::user()->otherinfo;

        if (!is_null($otherUserInfo)) {
            $id = $otherUserInfo->id; 
        }

        return [
            'username'    => 'required|max:50|unique:users,username,'.Auth::user()->id,
            'email'       => 'required|email|max:50|unique:users,email,'.Auth::user()->id,
            'name'        => 'required|min:5',
            'phone'       => $id == null ? 'required' : 'required|max:13|unique:other_infos,phone,'.$id ,
            'dob'         => 'required',
            'state'       => 'required',
            'city'        => 'required',
            'gender'      => 'required',
            'marital'     => 'required',
        ];
    }
}
