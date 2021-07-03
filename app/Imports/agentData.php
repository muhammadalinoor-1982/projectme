<?php

namespace App\Imports;

use App\Agent;
use Maatwebsite\Excel\Concerns\ToModel;

class agentData implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Agent([
            'name'     => $row[0],
            'threesession_id'    => $row[1],
            'total_call'    => $row[2],
            'total_ticket'    => $row[3],
            'created_by'    => $row[4],
            'user_name'    => $row[5],
        ]);
    }
}
