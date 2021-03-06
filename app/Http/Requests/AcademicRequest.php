<?php

namespace HumanResources\Http\Requests;

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
            'qualification' => 'required|max:50',
            'institution'   => 'required|max:50',
            'start-date'    => 'required|max:13',
            'end-date'      => 'required|max:13',
            'grade'         => 'required|max:20',
        ];
    }
}
