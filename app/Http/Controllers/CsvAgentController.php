<?php

namespace App\Http\Controllers;




use App\csvAgent;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CsvAgentController extends Controller
{
    public function import(Request $request)
    {
        //get file
        $upload=$request->file('file');
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');

        $header= fgetcsv($file);

        // dd($header);
        $escapedHeader=[];
        //validate
        /*foreach ($header as $key => $value) {
            $lheader=strtolower($value);
            $escapedItem=preg_replace('/[^a-z]/','/[^0-9]/','_', $lheader);
            array_push($escapedHeader, $escapedItem);
        }*/

        //looping through othe columns
        while($columns=fgetcsv($file))
        {
            if($columns[0]=="")
            {
                continue;
            }
            //trim data
            foreach ($columns as $key => &$value) {
                $value=preg_replace('~_~','',$value);
            }

            $data= array_combine($columns);

            // setting type
            foreach ($data as $key => &$value) {
                $value=($key=="name" || $key=="user_name")?(string)$value: (integer)$value;
            }

            // Table update
            $name=$data['name'];
            $threesession_id=$data['threesession_id'];
            $total_call=$data['total_call'];
            $total_ticket=$data['total_ticket'];
            $created_by=$data['created_by'];
            $user_name=$data['user_name'];

            $agent= csvAgent::firstOrNew(['name'=>$name,'user_name'=>$user_name]);
            $agent->threesession_id=$threesession_id;
            $agent->total_call=$total_call;
            $agent->total_ticket=$total_ticket;
            $agent->created_by=$created_by;
            $agent->save();
        }


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Bulk Upload';
        return  view('project.admin.csv.csv_agent.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\csvAgent  $csvAgent
     * @return \Illuminate\Http\Response
     */
    public function show(csvAgent $csvAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\csvAgent  $csvAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(csvAgent $csvAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\csvAgent  $csvAgent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, csvAgent $csvAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\csvAgent  $csvAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(csvAgent $csvAgent)
    {
        //
    }
}
