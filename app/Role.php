<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'label'
    ];

    /**
     * Create new public function
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
