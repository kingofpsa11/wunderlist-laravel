<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['id', 'title', 'due_date', 'listTask_id', 'reminder_date', 'note', 'file'];

    public  function listTask()
    {
        return $this->belongsTo('App\ListTask');
    }
}
