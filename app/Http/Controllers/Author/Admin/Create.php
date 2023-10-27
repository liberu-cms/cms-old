<?php

namespace App\Http\Controllers\Author\Admin;

use App\Forms\Builders\AuthorForm;
use App\Http\Controllers\Controller;
use App\Models\Author;

class Create extends Controller
{
   
    public function __invoke(Author $author, AuthorForm $form)
    {
        return ['form' => $form->create()];
    }
   
}
