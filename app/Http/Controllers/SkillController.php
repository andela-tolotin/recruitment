<?php

namespace HumanResources\Http\Controllers;

use Auth;
use Alert;
use Illuminate\Http\Request;
use HumanResources\Http\Requests\SkillRequest;
use HumanResources\Skill;

class SkillController extends Controller
{
    public function store(SkillRequest $request)
    {
        $skill =  Skill::create([
            'user_id'    => Auth::user()->id,
            'name'       => $request->input('skill'),
        ]);
        
        if (! is_null($skill)) {
            Alert::success('Skill added ', 'Operation');

            return redirect('/dashboard/skill/add');
        }

        Alert::error('Skill failed to add ', 'Operation');
        return redirect('/dashboard/skill/add');
    }

    public function getMySkills()
    {
        $skills  = Skill::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('dashboard.pages.add_skill', compact('skills'));
    }

    public function 
}
