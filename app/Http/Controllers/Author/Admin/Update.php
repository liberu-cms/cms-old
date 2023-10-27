<?php

namespace App\Http\Controllers\Author\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAuthorRequest;
use App\Models\Author;

class Update extends Controller
{
    
    public function __invoke(ValidateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return ['message' => __('The author was successfully updated'),
            'redirect' => 'author.admin.index',
            'author' => $author,
        ];
    }
}
