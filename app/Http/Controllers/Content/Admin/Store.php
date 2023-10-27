<?php

namespace App\Http\Controllers\Content\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContentRequest;
use App\Models\Content;


class Store extends Controller
{
    
    public function __invoke(ValidateContentRequest $request, Content $content)
    {
        $content->fill($request->validated())->save();

        return ['message' => __('The content was successfully created')];
    }
    
}
