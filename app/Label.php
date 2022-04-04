<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = [
        'labelable_id', 'labelable_type', 'name', 'description'
    ];

    /**
     * Create new public function
     */
    public function labelable()
    {
        return $this->morphTo();
    }
}
