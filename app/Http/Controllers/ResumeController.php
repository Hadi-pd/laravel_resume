<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = true;
        $resume = PersonalInfo::first();
        return view('resume.index',compact('resume','edit'));
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

        $image = $request->file('image');
        $imageName = time().'-'.$image->getClientOriginalExtension();
        $path = public_path('/images');
        $image->move($path,$imageName);
        
        $resume = PersonalInfo::create([
            'name' => $request->name,
            'work_subject' => $request->work_subject ,
            'about' => $request->about,
            'Age' => $request->age,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'image' => '/images/'.$imageName,
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
    public function edit($resume)
    {
       // $edit = true;
        $resume = PersonalInfo::find($resume);
        return view('resume.index',compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $resume)
    {

        $image = $request->file('image');
        $imageName = 'avatar'.'.'.$image->getClientOriginalExtension();
        $path = public_path('/images');
        $image->move($path,$imageName);

        $person=PersonalInfo::find($resume);
        $person->name = $request->name;
        $person->work_subject = $request->work_subject;
        $person->about = $request->about;
        $person->age = $request->age;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->address = $request->address;
        $person->image = '/images/'.$imageName;
        $person->save();
        return redirect(route('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($resume)
    {
        $person=PersonalInfo::find($resume);
        $person->delete();
        return redirect(route('admin'));
    }
}
