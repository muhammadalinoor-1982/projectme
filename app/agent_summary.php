<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class agent_summary extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name',
        'threesession_id',
        'total_call',
        'total_ticket',
        'created_by',
        'updated_by',
        'deleted_by',
        'user_name',
        'update_user_name'
    ];
    public function threesession(){
        return $this->belongsTo(threesession::class);
    }
}
