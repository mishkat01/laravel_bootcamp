<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputSingleColumn extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'data' => 'array',
    ];

    // Accessor for convenience
    public function getDataAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }

    // Mutator for convenience
    public function setDataAttribute($value)
    {
        $this->attributes['data'] = json_encode($value);
    }
}
