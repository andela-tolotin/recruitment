<?php

namespace HumanResources\Http\Requests;

use HumanResources\Http\Requests\Request;

class InterviewRequest extends Request
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
        return [
            'date' => 'required',
            'code' => 'required|min:2',
        ];
    }
}
