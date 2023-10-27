<?php

namespace App\Http\Controllers\ContentCategory\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContentCategoryRequest;
use App\Models\ContentCategory;

class Update extends Controller
{
    public function __invoke(ValidateContentCategoryRequest $request, ContentCategory $contentCategory)
    {
        $contentCategory->update($request->validated());

        return [
            'message' => __('The content category was successfully updated'),
            'redirect' => 'contentcategory.admin.index',
            'categories' => $contentCategory->content_category_id,
        ];
    }
}
