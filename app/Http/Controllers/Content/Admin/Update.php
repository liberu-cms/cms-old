<?php

namespace App\Http\Controllers\Content\Admin;

use App\Models\Content;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateContentRequest;


class Update extends Controller
{

    public function __invoke(ValidateContentRequest $request, Content $content)
    {
        $content->update($request->validated());

        return ['message' => __('The content was successfully updated')];
    }
    
}
