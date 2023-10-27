<?php

namespace App\Http\Controllers\Content\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class Index extends Controller
{

    public function __invoke(Content $content, Request $request)
    {
        $query = Content::query();

        if ($request->has('search')) {
            $query->where('content_title', 'like', '%' . $request->input('search') . '%');
        }
    }
}
