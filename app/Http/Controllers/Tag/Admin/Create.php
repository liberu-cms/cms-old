<?php

namespace App\Http\Controllers\Tag\Admin;

use App\Forms\Builders\TagForm;
use App\Http\Controllers\Controller;

class Create extends Controller
{
    public function __invoke(TagForm $form)
    {
        return ['form' => $form->create()];
    }
    
}
