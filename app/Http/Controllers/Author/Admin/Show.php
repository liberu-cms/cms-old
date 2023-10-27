<?php

namespace App\Http\Controllers\Author\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;

class Show extends Controller
{
    public function __invoke(Author $author)
    {
        return ['author' => $author];
    }
}
