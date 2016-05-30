<?php

namespace HumanResources\Http\Controllers;

use Auth;
use Alert;
use HumanResources\Academic;
use Illuminate\Http\Request;
use HumanResources\Http\Requests\AcademicRequest;

class AcademicController extends Controller
{
    public function store(AcademicRequest $request)
    {
        $academic =  Academic::create([
            'user_id'       => Auth::user()->id,
            'institution'   => $request->input('institution'),
            'grade'         => $request->input('grade'),
            'qualification' => $request->input('qualification'),
            'start-date'    => $request->input('start-date'),
            'end-date'      => $request->input('end-date'),
        ]);

        if (! is_null($academic)) {
            alert()->success('Academic details added ', 'Operation');

            return redirect('/dashboard/academic/add');
        }

        alert()->error('Academic details failed to add ', 'Operation');
    }
}
