<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'author_post')->withTimestamps();
    }
}