<?php

namespace App\Http\Controllers;

use App\threesession;
use Illuminate\Http\Request;

class ThreesessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List Page';
        $data['threesessions'] = threesession::withTrashed()->orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('project.admin.session.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create a session';
        return  view('project.admin.session.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $threesession = $request->except('_token');
        threesession::create($threesession);
        session()->flash('message','session Created successfully');
        return redirect()->route('threesession.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\threesession  $threesession
     * @return \Illuminate\Http\Response
     */
    public function show(threesession $threesession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\threesession  $threesession
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Session';
        $data['threesession'] = threesession::findOrFail($id);
        return  view('project.admin.session.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\threesession  $threesession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, threesession $threesession)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $threesession_data = $request->except('_token','_method');
        $threesession->update($threesession_data);
        session()->flash('message','Session Updated successfully');
        return redirect()->route('threesession.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\threesession  $threesession
     * @return \Illuminate\Http\Response
     */
    public function destroy(threesession $threesession)
    {
        $threesession->delete();
        session()->flash('message','Session Deleted successfully');
        return redirect()->route('threesession.index');
    }
    public function restore($id)
    {
        $threesession = threesession::onlyTrashed()->findOrFail($id);
        $threesession->restore();
        session()->flash('message','Session restore successfully');
        return redirect()->route('threesession.index');
    }
    public function delete($id)
    {
        $threesession = threesession::onlyTrashed()->findOrFail($id);
        $threesession->forceDelete();
        session()->flash('message','Session has been deleted permanently');
        return redirect()->route('threesession.index');
    }
}
