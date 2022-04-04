<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'milestone_id', 'name', 'description', 'assignee_id', 'start_date', 'end_date'
    ];

    /**
     * Create new public function
     */
    public function milestone()
    {
        return $this->belongsTo('App\Milestone');
    }

    /**
     * Create new public function
     */
    public function subtasks()
    {
        return $this->hasMany('App\SubTask');
    }

    /**
     * Create new public function
     */
    public function labels()
    {
        return $this->morphMany('App\Label', 'labelable');
    }

    /**
     * Create new public function
     */
    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
