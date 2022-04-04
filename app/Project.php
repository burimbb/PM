<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'owner_id', 'name', 'description', 'start_date', 'end_date', 'budget'
    ];

    /**
     * Create new public function
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Create new public function
     */
    public function milestones()
    {
        return $this->hasMany('App\Milestone');
    }

    /**
     * Create new public function
     */
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }
}
