<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = false;
        $educations = Education::all();
        return view('resume.education', compact('edit','educations'));
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
        $category = Education::create([  
            'education_subject'=> $request->education_subject,
            'college'=>           $request->college,
            'date'=>              $request->date,
            'description'=>       $request->description
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
    public function edit($education)
    {
        $edit = true;
        $education = Education::find($education);
        return view('resume.education',compact('education','edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $education)
    {
        $cat=Education::find($education);
        $cat->education_subject = $request->education_subject;
        $cat->college = $request->college;
        $cat->date = $request->date;
        $cat->description = $request->description;
        $cat->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($education)
    {
        $cat=Education::find($education);
        $cat->delete();
        return redirect()->back();
    }
}
