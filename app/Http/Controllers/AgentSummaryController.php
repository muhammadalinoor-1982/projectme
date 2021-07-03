<?php

namespace App\Http\Controllers;

use App\agent_summary;
use App\threesession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'List Page';
        if(Auth::user()->user_status == 'inactive'){
        $data = Auth::user();
        return view('welcome',$data);
        }elseif(Auth::user()->user_type == 'agent' && Auth::user()->user_status == 'active'){
            $data = Auth::user();
            $data['agent_summaries'] = agent_summary::where('created_by',$data->id)->withTrashed()->orderBy('id','desc')->get();
        }else{
        $data['agent_summaries'] = agent_summary::withTrashed()->orderBy('id','desc')->get();
        }
        $data['serial'] = 1;
        return  view('project.admin.agent_summary.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $data['title'] = 'Create New Summary';
            $data['threesessions'] = threesession::orderBy('name')->get();
            return  view('project.admin.agent_summary.create',$data);
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
            'name'=>'required',
            'threesession_id'=>'required',
            'total_call'=>'required',
            'total_ticket'=>'required'
        ]);

        $agent_summary = $request->except('_token');
        $agent_summary['created_by'] = auth()->user()->id;
        $agent_summary['user_name'] = auth()->user()->name;
        agent_summary::create($agent_summary);
        session()->flash('message','Summary Created successfully');
        return redirect()->route('agent_summary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agent_summary  $agent_summary
     * @return \Illuminate\Http\Response
     */
    public function show(agent_summary $agent_summary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agent_summary  $agent_summary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['title'] = 'Edit Summary';
        $data['agent_summary'] = agent_summary::findOrFail($id);
        $data['threesessions'] = threesession::orderBy('name')->get();
        return  view('project.admin.agent_summary.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agent_summary  $agent_summary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agent_summary $agent_summary)
    {
        $request->validate([
            'name'=>'required',
            'threesession_id'=>'required',
            'total_call'=>'required',
            'total_ticket'=>'required'
        ]);
        $agent_summary_data = $request->except('_token');
        $agent_summary_data['updated_by'] = auth()->user()->id;
        $agent_summary_data['update_user_name'] = auth()->user()->name;
        $agent_summary->update($agent_summary_data);
        session()->flash('message','Summary Updated successfully');
        return redirect()->route('agent_summary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agent_summary  $agent_summary
     * @return \Illuminate\Http\Response
     */
    public function destroy(agent_summary $agent_summary)
    {
        $agent_summary->delete();
        session()->flash('message','Summary Deleted successfully');
        return redirect()->route('agent_summary.index');
    }
    public function restore($id)
    {
        $agent_summary = agent_summary::onlyTrashed()->findOrFail($id);
        $agent_summary->restore();
        session()->flash('message','Summary restore successfully');
        return redirect()->route('agent_summary.index');
    }
    public function delete($id)
    {
        $agent_summary = agent_summary::onlyTrashed()->findOrFail($id);
        $agent_summary->forceDelete();
        session()->flash('message','Summary has been deleted permanently');
        return redirect()->route('agent_summary.index');
    }
}
