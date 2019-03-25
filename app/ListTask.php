<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTask extends Model
{
    protected $table = 'lists';

    protected $fillable = ['id', 'title'];


    public function task()
    {
        return $this->hasMany('App\Task', 'listTask_id', 'id');
    }
}
