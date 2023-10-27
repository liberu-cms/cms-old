<?php

namespace App\Http\Controllers\ContentCategory\Admin;


use App\Http\Controllers\Controller;
use App\Models\ContentCategory;

class Show extends Controller
{
    public function __invoke(ContentCategory $contentCategory)
    {
        return ['contentCategory' => $contentCategory];
    }
}
