<?php

namespace HumanResources\Http\Controllers;

use Auth;
use Alert;
use Illuminate\Http\Request;
use HumanResources\WorkExperience;
use HumanResources\Http\Requests\WorkRequest;

class WorkExperienceController extends Controller
{
    public function store(WorkRequest $request)
    {
        $workExperience =  WorkExperience::create([
            'user_id'         => Auth::user()->id,
            'company'         => $request->input('company'),
            'position'        => $request->input('position'),
            'job-description' => $request->input('job-description'),
            'start-date'      => $request->input('start-date'),
            'end-date'        => $request->input('end-date'),
        ]);

        if (! is_null($workExperience)) {
            Alert::success('Work Experience details added ', 'Operation');

            return redirect('/dashboard/work/add');
        }

        Alert::error('Work Experience details failed to add ', 'Operation');
        return redirect('/dashboard/work/add');
    }

    public function getMyWorkExperience()
    {
        $workExperience = WorkExperience::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->paginate(5);

        return view('dashboard.pages.add_work_experience', compact('workExperience'));
    }

    public function editWorkExperience($id)
    {
        $workExperience = WorkExperience::find($id);

        if (is_null($workExperience)) {
            abort(404);
        }

        return view('dashboard.pages.view_work_experience', compact('workExperience'));
    }
}
