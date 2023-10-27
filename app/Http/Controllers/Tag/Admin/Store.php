<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use LaravelLiberu\HowTo\Http\Requests\ValidateTag;

class Store extends Controller
{
    public function __invoke(ValidateTag $request, Tag $tag)
    {
        $tag->fill($request->validated())->save();

        return [
            'message' => __('The tag was successfully created'),
            'redirect' => 'tag.admin.index',
            'tag' => $tag->tag_id,
        ];
    }
}
