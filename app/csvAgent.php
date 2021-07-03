<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class csvAgent extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name',
        'threesession_id',
        'total_call',
        'total_ticket',
        'created_by',
        'user_name'
    ];

    //public function agent_summary(){
        //return $this->belongsTo(agent_summary::class);
    //}
}
