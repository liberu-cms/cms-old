<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Http\Controllers\Controller;
use LaravelLiberu\HowTo\Http\Requests\ValidateTag;
use App\Models\Tag;

class Update extends Controller
{
    public function __invoke(ValidateTag $request, Tag $tag)
    {
        $tag->update($request->validated());

        return [
            'message' => __('The tag was successfully updated'),
            'redirect' => 'tag.admin.index',
            'tag' => $tag,
        ];
    }
}
