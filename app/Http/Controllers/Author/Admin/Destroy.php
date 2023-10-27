<?php

namespace App\Http\Controllers\Author\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;

class Destroy extends Controller
{
    
    public function __invoke(Author $author)
    {
        $author->delete();

        return [
            'message' => __('The author was successfully deleted'),
            'redirect' => 'author.admin.index',
        ];
    }
}
