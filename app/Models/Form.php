<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name', 'slug', 'file_path', 'category_id', 'state_id', 'content', 'content_header', 'downloads'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function getRouteKeyName()
    {
        return 'slug'; // or 'slug' if you prefer to use slugs in your URLs
    }
}
