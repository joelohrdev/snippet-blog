<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'title', 'body', 'slug', 'published', 'published_at',
    ];

    protected $casts = [
        'published_at' => 'date',
        'published' => 'boolean',
    ];
}
