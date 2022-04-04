<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $fillable = [
        'task_id', 'name', 'description', 'assignee_id', 'due_date'
    ];

    /**
     * Create new public function
     */
    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    /**
     * Create new public function
     */
    public function labels()
    {
        $this->morphMany('App\Label', 'labelable');
    }
}
