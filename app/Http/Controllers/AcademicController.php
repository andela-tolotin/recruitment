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
            $academics = $academics = $this->getAcademicInfo();
            alert()->success('Academic details added ');

            return redirect('/dashboard/academic/add');
        }

        alert()->error('Academic details failed to add ', 'Operation');
        return redirect('/dashboard/academic/add');
    }

    /**
     * This method get the applicant's academic qualification.
     * @param void
     *
     * @return view
     */
    public function getMyAcademicQualifications()
    {
        $academics = $this->getAcademicInfo();
        return view('dashboard.pages.add_academic', compact('academics'));
    }

    public function editMyAcademicProfile($id)
    {
        $academic = Academic::find($id);

        if (is_null($academic)) {
            abort(404);
        }

        return view('dashboard.pages.view_academic', compact('academic'));
    }

    public function deleteMyAcademicProfile($id)
    {
        $academic = Academic::find($id);

        if (is_null($academic)) {
            alert()->error('Academic details failed to add ', 'Operation');
        }

        $academic->delete();

        return redirect('/dashboard/academic/add');
    }

    public function updateMyAcademicProfile($id, AcademicRequest $request)
    {
        $academic = Academic::find($id);

        if (is_null($academic)) {
            abort(404);
        }

        if ($academic->update([
            'user_id'       => Auth::user()->id,
            'institution'   => $request->input('institution'),
            'grade'         => $request->input('grade'),
            'qualification' => $request->input('qualification'),
            'start-date'    => $request->input('start-date'),
            'end-date'      => $request->input('end-date'),
        ])) {
            alert()->success('Academic details updated ');
        return redirect('/dashboard/academic/add');
        }

        abort(404);
    }

    public function getAcademicInfo()
    {
        return Academic::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->paginate(5);
    }
}
