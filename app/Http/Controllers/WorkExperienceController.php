<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = false;
        $works = WorkExperience::all();
        return view('resume.workex', compact('edit','works'));
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
        if ($request->work_name) {
        $category = WorkExperience::create([  
            'work_name'=> $request->work_name,
            'company_name'=> $request->company_name,
            'date'=> $request->date,
            'description'=> $request->description
        ]);
        session()->flash('success', 'Stored Successfully !');
        return redirect()->back();
    }
    session()->flash('error', 'Something wrong happend !');
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
    public function edit($work)
    {
        $edit = true;
        $work = WorkExperience::find($work);
        return view('resume.workex',compact('work','edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $work)
    {
        if ($request->work_name) {
        $cat=WorkExperience::find($work);
        $cat->work_name = $request->work_name;
        $cat->company_name = $request->company_name;
        $cat->date = $request->date;
        $cat->description = $request->description;
        $cat->save();
        session()->flash('success', 'Update Successfully !');
            return redirect('workexperience');
        }
        session()->flash('error', 'Something wrong happend !');
        return redirect('workexperience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($work)
    {
        $cat=WorkExperience::find($work);
        $cat->delete();
        return redirect()->back();
    }
}
