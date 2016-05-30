<?php

namespace HumanResources\Http\Requests;

use Auth;

class AcademicRequest extends Request
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
            'qualification' => 'required',
            'institution'   => 'required',
            'start-date'    => 'required',
            'end-date'      => 'required',
            'grade'         => 'required',
        ];
    }
}
