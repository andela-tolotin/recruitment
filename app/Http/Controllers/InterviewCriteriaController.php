<?php

namespace HumanResources\Http\Controllers;

use Illuminate\Http\Request;
use HumanResources\Interview;
use HumanResources\InterviewCriteria;
use HumanResources\Http\Requests\InterviewCriteriaRequest;

class InterviewCriteriaController extends Controller
{
    public function index()
    {
        $interviewCriteria = InterviewCriteria::orderBy('id', 'desc')->paginate(10);
        $interviews = Interview::all();

        return view('dashboard.pages.add_interview_criteria', compact('interviewCriteria','interviews'));
    }

    public function store(InterviewCriteriaRequest $request)
    {
        $interview = InterviewCriteria::create([
            'interview_id' => $request->input('interview-type'),
            'name' => $request->input('name'),
            'weight' => $request->input('weight'),
            'description' => $request->input('description'),
        ]);

        if (!is_null($interview)) {
            return redirect('/dashboard/interview-criteria/add');
        }
    }

    public function edit($id)
    {
        $interviewCriteria = InterviewCriteria::find($id);
        $interviews = Interview::all();

        if (!is_null($interviewCriteria)) {
            return view(
                'dashboard.pages.view_interview_criteria', 
                compact('interviewCriteria', 'interviews')
            );
        }

        abort(404);

    }

    public function update(InterviewCriteriaRequest $request, $id)
    {
        $interviewCriteria = InterviewCriteria::find($id);

        if (!is_null($interviewCriteria)) {
            $interviewCriteria->update([
                'interview_id' => $request->input('interview-type'),
                'name' => $request->input('name'),
                'weight' => $request->input('weight'),
                'description' => $request->input('description'),
            ]);

            return redirect('/dashboard/interview-criteria/add');
        }

        abort(404);
    }

    public function delete($id)
    {
        $interviewCriteria = InterviewCriteria::find($id);

        if (!is_null($interviewCriteria)) {
            $interviewCriteria->delete();

            return redirect('/dashboard/interview-criteria/add');
        }

        abort(404);
    }
}
