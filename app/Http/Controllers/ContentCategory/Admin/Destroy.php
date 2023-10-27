<?php

namespace App\Http\Controllers\ContentCategory\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentCategory;

class Destroy extends Controller
{
    
    public function __invoke(ContentCategory $contentCategory)
    {
        $contentCategory->delete();

        return [
            'message' => __('The content category was successfully deleted'),
            'redirect' => 'contentcategory.admin.index',
        ];
    }
}
