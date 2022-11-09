<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'image', 'description', 'user_id'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/articles/' . $value),
        );
    }  

    public function user(){

        return $this->belongsTo(User::class);

    }
}
