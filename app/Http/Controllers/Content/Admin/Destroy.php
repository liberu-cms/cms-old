<?php

namespace App\Http\Controllers\Content\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;

class Destroy extends Controller
{
    public function __invoke(Content $content)
    {
        $content->delete();

        return [
            'message' => __('The content was successfully deleted'),
            'redirect' => 'content.admin.index',
        ];
    }
}
