<?php

namespace App\Http\Controllers\Author\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAuthorRequest;
use App\Models\Author;

class Store extends Controller
{
    public function __invoke(ValidateAuthorRequest $request, Author $author)
    {
        $author->fill($request->validated())->save();

        return ['message' => __('The author was successfully created'),
            'redirect' => 'author.admin.index',
            'author' => $author->author_id,
        ];
    }

}
   
