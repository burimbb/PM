<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $fillable = [
        'project_id', 'name', 'description', 'start_date', 'end_date'
    ];

    /**
     * Create new public function
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * Create new public function
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
