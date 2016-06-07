<?php

namespace HumanResources\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use HumanResources\Http\Requests\InterviewRequest;
use HumanResources\Interview;

class InterviewController extends Controller
{
    public function index()
    {
        $interviews =  Interview::orderBy('id', 'desc')->paginate(10);

        return view('dashboard.pages.add_interview_form', compact('interviews')); 
    }

    public function store(InterviewRequest $request)
    {
        $interview = Interview::create([
            'code'        => $request->input('code'),
            'date'        => $request->input('date'),
            'type'        => $request->input('type'),
            'description' => $request->input('description'),
        ]);

        if (!is_null($interview)) {
            alert()->success('Interview details added ');

            return redirect('/dashboard/interview/add');
        }

        abort(404);
    }

    public function update(InterviewRequest $request, $id)
    {
        $interview = Interview::find($id);

        if (!is_null($interview)) {
            $interview->update([
                'code'        => $request->input('code'),
                'date'        => $request->input('date'),
                'type'        => $request->input('type'),
                'description' => $request->input('description'),
            ]);

            alert()->success('Interview details updated ');

            return redirect('/dashboard/interview/add');
        }
    }

    public function edit($id)
    {
        $interview = Interview::find($id);

        if (!is_null($interview)) {
            return view('dashboard.pages.view_interview', compact('interview'));
        }

        abort(404);
    }

    public function delete($id)
    {
        $interview = Interview::find($id);

        if (!is_null($interview)) {
            $interview->delete();
            alert()->success('Interview details deleted');

            return redirect('/dashboard/interview/add');
        }

        abort(404);
    }
}
