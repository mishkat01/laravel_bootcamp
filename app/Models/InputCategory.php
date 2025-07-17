<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputCategory extends Model
{
     protected $fillable = [
        'name', 'description', 'quantity', 'type', 'is_active', 'image_path',
        'available_on', 'available_at', 'available_datetime', 'email', 'url',
        'color', 'password'
    ];
}
