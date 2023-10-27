<?php

namespace App\Http\Controllers\Content\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;

class Show extends Controller
{
    public function __invoke(Content $content)
    {
        return ['content' => $content];
    }
}
