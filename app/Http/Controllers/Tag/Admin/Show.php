<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class Show extends Controller
{
    
    public function __invoke(Tag $tag)
    {
        return ['tag' => $tag];
    }
}
