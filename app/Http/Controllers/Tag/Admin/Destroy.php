<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class Destroy extends Controller
{
    public function __invoke(Tag $tag)
    {
        $tag->delete();

        return ['message' => __('The tag was successfully deleted')];
    }
}
