<?php

namespace App\Http\Controllers\ContentCategory\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContentRequest;
use App\Models\ContentCategory;

class Store extends Controller
{

    public function __invoke(ValidateContentRequest $request, ContentCategory $contentCategory)
    {
        $contentCategory->fill($request->validated())->save();

        return [
            'message' => __('The content category was successfully created'),
            'redirect' => 'contentcategory.admin.index',
            'categoria' => $contentCategory->content_category_id,
        ];
    }
}
