<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SocialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = false;
        $socialnetwork = SocialNetwork::all();
        return view('resume.socialnetwork', compact('edit', 'socialnetwork'));
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
        if ($request->name) {
            $data = SocialNetwork::create([
                'name' => $request->name,
                'icon' => $request->icon,
                'link' => $request->link,
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
    public function edit($socialnetwork)
    {
        $edit = true;
        $socialnetwork = SocialNetwork::find($socialnetwork);
        return view('resume.socialnetwork', compact('socialnetwork', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $network)
    {
        if ($request->name) {
            $data = SocialNetwork::find($network);
            $data->name = $request->name;
            $data->icon = $request->icon;
            $data->link = $request->link;
            $data->save();
            session()->flash('success', 'Update Successfully !');
            return redirect('socialnetwork');
        }
        session()->flash('error', 'Something wrong happend !');
        return redirect('socialnetwork');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($network)
    {
        $data = SocialNetwork::find($network);
        $data->delete();
        session()->flash('success', 'Deleted Successfully !');
        return redirect()->back();
    }
}
