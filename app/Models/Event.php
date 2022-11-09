<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'start_date', 'end_date', 'location', 'description', 'image', 'slug', 'user_id'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/events/' . $value),
        );
    }  
}
