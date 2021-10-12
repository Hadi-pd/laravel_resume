<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use App\Models\ProfessionalSkill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = false;
        $skills = ProfessionalSkill::all();
        return view('resume.skills',compact('edit','skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = ProfessionalSkill::create([
            'skill' => $request->skill,
            'percent' => $request->percent ?? 0,
            'is_other' => $request->is_other ?? 0,
            'person_id' => $request->person_id ?? PersonalInfo::select('id')->first()->id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($skills)
    {
        $edit = true;
        //$skills = ProfessionalSkill::all();
        $skills = ProfessionalSkill::find($skills);
        return view('resume.skills',compact('skills','edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $skill)
    {
        $cat=ProfessionalSkill::find($skill);
        $cat->skill = $request->skill;
        $cat->percent = $request->percent;
        $cat->is_other = $request->is_other;
        $cat->save();
        return redirect(route('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($skill)
    {
        $cat=ProfessionalSkill::find($skill);
        $cat->delete();
        return redirect(route('admin'));
    }
}
