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

    public function updateWorkExperience($id, WorkRequest $request)
    {
        $workExperience = WorkExperience::find($id);

        if (! is_null($workExperience)) {
            $update  = $workExperience->update([
                'user_id'         => Auth::user()->id,
                'company'         => $request->input('company'),
                'position'        => $request->input('position'),
                'job-description' => $request->input('job-description'),
                'start-date'      => $request->input('start-date'),
                'end-date'        => $request->input('end-date'),
            ]);

            alert()->success('Work Experience  updated ');

            return redirect('/dashboard/work/add');
        }

        abort(404);
    }

    public function deleteWorkExperience($id)
    {
        $workExperience = WorkExperience::find($id);

        if (is_null($workExperience)) {
            alert()->error('Work Experience failed to delete ', 'Operation');
        }

        $workExperience->delete();

        return redirect('/dashboard/work/add');
    }
}
