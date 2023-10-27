<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $primaryKey = 'content_id';

    protected $fillable = [
        'content_title',
        'content_body',
        'content_category_id',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(ContentCategory::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
